/**
 * Lead Attribution System
 * First-touch + last-touch UTM / click-ID capture → cookie → form hidden fields
 */
(function () {
  'use strict';

  // ---- Configuration ----
  var COOKIE_NAME = 'lead_attribution';
  var COOKIE_DAYS = 30;
  var ATTRIBUTION_PARAMS = [
    'campaign_id',
    'utm_source',
    'utm_medium',
    'utm_campaign',
    'utm_content',
    'utm_term',
    'gclid',
    'fbclid'
  ];
  var FIRST_TOUCH_FIELDS = [
    'first_touch_source',
    'first_touch_medium',
    'first_touch_channel',
    'first_touch_campaign',
    'first_touch_referrer',
    'first_touch_landing_page',
    'first_touch_at'
  ];
  var LAST_TOUCH_FIELDS = [
    'last_touch_source',
    'last_touch_medium',
    'last_touch_channel',
    'last_touch_campaign',
    'last_touch_referrer',
    'last_touch_landing_page',
    'last_touch_at'
  ];
  // Hidden form fields that receive cookie values on submit
  var FORM_FIELDS = ATTRIBUTION_PARAMS.concat(
    ['landing_page', 'referrer']
  ).concat(FIRST_TOUCH_FIELDS).concat(LAST_TOUCH_FIELDS);

  var SOCIAL_SOURCES = [
    'facebook', 'fb', 'instagram', 'ig', 'meta',
    'twitter', 'x', 'linkedin', 'pinterest', 'tiktok',
    'youtube', 'snapchat', 'reddit'
  ];
  var SEARCH_SOURCES = ['google', 'bing', 'yahoo', 'duckduckgo', 'baidu'];
  var PAID_MEDIA = [
    'cpc', 'ppc', 'paid', 'paid-search', 'paid_search',
    'cpm', 'cpa', 'cpl', 'paid-social', 'paid_social', 'display'
  ];

  // ============================================================
  // Cookie helpers
  // ============================================================

  /**
   * Write the lead_attribution cookie (JSON payload, 30-day expiry).
   * @param {Object} data - Attribution object to store
   */
  function setLeadAttributionCookie(data) {
    var expires = new Date();
    expires.setTime(expires.getTime() + (COOKIE_DAYS * 24 * 60 * 60 * 1000));
    var value = encodeURIComponent(JSON.stringify(data));
    document.cookie =
      COOKIE_NAME + '=' + value +
      '; expires=' + expires.toUTCString() +
      '; path=/' +
      '; SameSite=Lax';
  }

  /**
   * Read and parse the lead_attribution cookie.
   * @returns {Object|null} Parsed attribution data, or null if missing/invalid
   */
  function getLeadAttributionCookie() {
    var nameEQ = COOKIE_NAME + '=';
    var parts = document.cookie.split(';');
    for (var i = 0; i < parts.length; i++) {
      var c = parts[i].replace(/^\s+/, '');
      if (c.indexOf(nameEQ) === 0) {
        try {
          return JSON.parse(decodeURIComponent(c.substring(nameEQ.length)));
        } catch (e) {
          return null;
        }
      }
    }
    return null;
  }

  // Expose helpers globally for reuse elsewhere on the site
  window.setLeadAttributionCookie = setLeadAttributionCookie;
  window.getLeadAttributionCookie = getLeadAttributionCookie;

  // ============================================================
  // Channel + touch helpers
  // ============================================================

  function includesAny(value, list) {
    if (!value) {
      return false;
    }
    for (var i = 0; i < list.length; i++) {
      if (value === list[i] || value.indexOf(list[i]) !== -1) {
        return true;
      }
    }
    return false;
  }

  /**
   * Derive a marketing channel from source / medium / click IDs.
   * @param {string} source
   * @param {string} medium
   * @param {string} [gclid]
   * @param {string} [fbclid]
   * @returns {string}
   */
  function deriveChannel(source, medium, gclid, fbclid) {
    var src = (source || '').toLowerCase();
    var med = (medium || '').toLowerCase();
    var isSocial = includesAny(src, SOCIAL_SOURCES) ||
      med === 'social' || med === 'paid-social' || med === 'paid_social';
    var isSearch = includesAny(src, SEARCH_SOURCES);
    var isPaid = includesAny(med, PAID_MEDIA) || !!gclid || !!fbclid;

    if (gclid) {
      return 'paid_search';
    }
    if (fbclid) {
      return 'paid_social';
    }
    if (isSocial && isPaid) {
      return 'paid_social';
    }
    if (isSearch && isPaid) {
      return 'paid_search';
    }
    if (med === 'cpc' || med === 'ppc' || med === 'paid') {
      return isSocial ? 'paid_social' : 'paid_search';
    }
    if (med === 'display' || med === 'banner' || med === 'cpm') {
      return 'display';
    }
    if (med === 'email') {
      return 'email';
    }
    if (med === 'affiliate' || med === 'affiliates') {
      return 'affiliate';
    }
    if (med === 'referral' || med === 'referrer') {
      return 'referral';
    }
    if (isSocial) {
      return 'organic_social';
    }
    if (isSearch || med === 'organic') {
      return 'organic_search';
    }
    if (!src && !med) {
      return 'direct';
    }
    if (src === 'direct' || med === 'none' || med === '(none)') {
      return 'direct';
    }
    return med || src || 'other';
  }

  /**
   * Infer source/medium when only a click ID is present.
   */
  function resolveSourceMedium(params) {
    var source = (params && params.utm_source) || '';
    var medium = (params && params.utm_medium) || '';
    if (!source && params && params.gclid) {
      source = 'google';
    }
    if (!source && params && params.fbclid) {
      source = 'facebook';
    }
    if (!medium && params && (params.gclid || params.fbclid)) {
      medium = 'cpc';
    }
    return { source: source, medium: medium };
  }

  /**
   * Build a first/last-touch snapshot from the current attributed visit.
   * @param {Object} urlParams
   * @param {string} timestamp ISO-8601
   * @returns {Object}
   */
  function buildTouchSnapshot(urlParams, timestamp) {
    var resolved = resolveSourceMedium(urlParams);
    return {
      source: resolved.source,
      medium: resolved.medium,
      channel: deriveChannel(resolved.source, resolved.medium, urlParams.gclid, urlParams.fbclid),
      campaign: urlParams.utm_campaign || '',
      referrer: document.referrer || '',
      landing_page: window.location.href,
      at: timestamp
    };
  }

  function applyFirstTouch(data, touch) {
    data.first_touch_source = touch.source;
    data.first_touch_medium = touch.medium;
    data.first_touch_channel = touch.channel;
    data.first_touch_campaign = touch.campaign;
    data.first_touch_referrer = touch.referrer;
    data.first_touch_landing_page = touch.landing_page;
    data.first_touch_at = touch.at;
  }

  function applyLastTouch(data, touch) {
    data.last_touch_source = touch.source;
    data.last_touch_medium = touch.medium;
    data.last_touch_channel = touch.channel;
    data.last_touch_campaign = touch.campaign;
    data.last_touch_referrer = touch.referrer;
    data.last_touch_landing_page = touch.landing_page;
    data.last_touch_at = touch.at;
  }

  function hasFirstTouch(data) {
    return !!(data && data.first_touch_at);
  }

  /**
   * Backfill first/last-touch from a legacy cookie (utm_* only).
   * Never overwrites first-touch fields that already exist.
   */
  function migrateLegacyCookie(existing) {
    var data = {};
    var key;
    for (key in existing) {
      if (Object.prototype.hasOwnProperty.call(existing, key)) {
        data[key] = existing[key];
      }
    }

    var resolved = resolveSourceMedium(data);
    var at = data.first_visit_time || new Date().toISOString();
    var touch = {
      source: resolved.source,
      medium: resolved.medium,
      channel: deriveChannel(resolved.source, resolved.medium, data.gclid, data.fbclid),
      campaign: data.utm_campaign || '',
      referrer: data.referrer || '',
      landing_page: data.landing_page || '',
      at: at
    };

    if (!hasFirstTouch(data)) {
      applyFirstTouch(data, touch);
    }
    if (!data.last_touch_at) {
      applyLastTouch(data, {
        source: data.first_touch_source,
        medium: data.first_touch_medium,
        channel: data.first_touch_channel,
        campaign: data.first_touch_campaign,
        referrer: data.first_touch_referrer,
        landing_page: data.first_touch_landing_page,
        at: data.first_touch_at
      });
    }
    return data;
  }

  // ============================================================
  // Capture attribution on page load
  // ============================================================

  /**
   * Read UTM / click-ID params from the current URL.
   * @returns {Object} Key/value map of present attribution params
   */
  function getUrlAttributionParams() {
    var params = new URLSearchParams(window.location.search);
    var data = {};
    var hasAny = false;

    for (var i = 0; i < ATTRIBUTION_PARAMS.length; i++) {
      var key = ATTRIBUTION_PARAMS[i];
      var val = params.get(key);
      if (val !== null && val !== '') {
        data[key] = val;
        hasAny = true;
      }
    }
    console.log("URL UTM Data :", data);
    return hasAny ? data : null;
  }

  /**
   * Persist first-touch on the first attributed visit (never overwrite).
   * Update last-touch when the user arrives with new UTM / click-ID params.
   */
  function captureAttribution() {
    var existing = getLeadAttributionCookie();
    var urlParams = getUrlAttributionParams();

    // No URL attribution: keep cookie as-is; migrate legacy cookies once
    if (!urlParams) {
      if (existing && !hasFirstTouch(existing)) {
        setLeadAttributionCookie(migrateLegacyCookie(existing));
      }
      return;
    }

    var now = new Date().toISOString();
    var touch = buildTouchSnapshot(urlParams, now);

    if (!existing) {
      var attribution = {
        campaign_id: urlParams.campaign_id || '',
        utm_source: urlParams.utm_source || '',
        utm_medium: urlParams.utm_medium || '',
        utm_campaign: urlParams.utm_campaign || '',
        utm_content: urlParams.utm_content || '',
        utm_term: urlParams.utm_term || '',
        gclid: urlParams.gclid || '',
        fbclid: urlParams.fbclid || '',
        landing_page: touch.landing_page,
        referrer: touch.referrer,
        first_visit_time: now
      };
      applyFirstTouch(attribution, touch);
      applyLastTouch(attribution, touch);
      setLeadAttributionCookie(attribution);
      return;
    }

    // Cookie exists — never overwrite first-touch or original UTM fields
    var updated = migrateLegacyCookie(existing);
    applyLastTouch(updated, touch);
    setLeadAttributionCookie(updated);
  }

  // ============================================================
  // Populate hidden form fields before submission
  // ============================================================

  /**
   * Fill matching hidden inputs on a form from the attribution cookie.
   * Only sets fields that already exist in the form markup.
   * @param {HTMLFormElement} form
   */
  function populateFormAttributionFields(form) {
    var data = getLeadAttributionCookie();
    if (!data || !form) {
      return;
    }

    for (var i = 0; i < FORM_FIELDS.length; i++) {
      var fieldName = FORM_FIELDS[i];
      if (typeof data[fieldName] === 'undefined') {
        continue;
      }
      // Prefer name= match; fall back to id= for flexibility
      var input =
        form.querySelector('[name="' + fieldName + '"]') ||
        form.querySelector('#' + fieldName);
      if (input) {
        input.value = data[fieldName];
      }
    }

    // Map utm_campaign → campaign_name hidden field when present
    if (data.utm_campaign) {
      var campaignNameInput =
        form.querySelector('[name="campaign_name"]') ||
        form.querySelector('#campaign_name');
      if (campaignNameInput) {
        campaignNameInput.value = data.utm_campaign;
      }
    }
  }

  /**
   * Attach a capture-phase submit listener so attribution is injected
   * before any other submit handlers (works for every form on the page).
   */
  function bindFormAttribution() {
    document.addEventListener('submit', function (event) {
      var form = event.target;
      if (form && form.tagName === 'FORM') {
        populateFormAttributionFields(form);
      }
    }, true);
  }

  // ============================================================
  // Initialize on every page load
  // ============================================================
  captureAttribution();
  bindFormAttribution();
})();
