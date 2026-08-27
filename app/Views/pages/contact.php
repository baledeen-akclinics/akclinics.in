<?= $this->extend('layouts/app') ?>

<?= $this->section('title') ?>Contact Us - AK Clinics Indiranagar Bangalore<?= $this->endSection() ?>
<?= $this->section('keywords') ?><?= $this->endSection() ?>
<?= $this->section('description') ?><?= $this->endSection() ?>
<?= $this->section('canonical') ?>https://www.akclinics.in/contact/<?= $this->endSection() ?>

<?= $this->section('hide_loader') ?>1<?= $this->endSection() ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('css/contact.css') ?>">


<div id="service-page" class="wide-60 service-page-section division">
  <div class="container">
    <div class="row">

      <div class="col-lg-8">


        <div class="row">
          <h1 class="section-id blue-color" style="width:100%;">Clinic Address</h1>
          <div class="col-md-6">
            <div class="contact-box mb-40">
              <p><i class="fa fa-map-marker" style="font-size:18px;"></i>&nbsp;&nbsp;&nbsp;1st Floor, 316 The Mayfair, 100 Feet Road</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Indiranagar, Bengaluru, Karnataka-560038</p>

            </div>
          </div>

          <div class="col-md-6">
            <div class="contact-box mb-40">
              <p><i class="fa fa-envelope-o"></i>&nbsp; Email &nbsp;&nbsp;&nbsp;: info@akclinics.in</p>
              <p><i class="fa fa-mobile"></i>&nbsp;&nbsp;&nbsp;Mobile &nbsp;: <a href="tel:+919779162190">+919779162190</a></p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-holder mb-40" id="contact_us_form">
              <h1 class="section-id blue-color">Contact us</h1>

              <form id="enquiryForm" novalidate>

                <input type="hidden" id="source_url" name="source_url">
                <input type="hidden" id="source_id" name="source_id" value="website">
                <input type="hidden" id="campaign_id" name="campaign_id">
                <input type="hidden" id="campaign_name" name="campaign_name">
                <input type="hidden" id="ad_id" name="ad_id" value="1">
                <input type="hidden" id="ad_name" name="ad_name" value="1">
                <input type="hidden" id="form_id" name="form_id" value="website-contact-form">
                <input type="hidden" id="form_name" name="form_name" value="Contact us">

                <!-- Lead Attribution — filled from cookie by utm-lead-attribution.js on submit -->
                <input type="hidden" id="utm_source" name="utm_source">
                <input type="hidden" id="utm_medium" name="utm_medium">
                <input type="hidden" id="utm_campaign" name="utm_campaign">
                <input type="hidden" id="utm_content" name="utm_content">
                <input type="hidden" id="utm_term" name="utm_term">
                <input type="hidden" id="gclid" name="gclid">
                <input type="hidden" id="fbclid" name="fbclid">
                <input type="hidden" id="landing_page" name="landing_page">
                <input type="hidden" id="referrer" name="referrer">

                <input type="hidden" id="first_touch_source" name="first_touch_source">
                <input type="hidden" id="first_touch_medium" name="first_touch_medium">
                <input type="hidden" id="first_touch_channel" name="first_touch_channel">
                <input type="hidden" id="first_touch_campaign" name="first_touch_campaign">
                <input type="hidden" id="first_touch_referrer" name="first_touch_referrer">
                <input type="hidden" id="first_touch_landing_page" name="first_touch_landing_page">
                <input type="hidden" id="first_touch_at" name="first_touch_at">

                <input type="hidden" id="last_touch_source" name="last_touch_source">
                <input type="hidden" id="last_touch_medium" name="last_touch_medium">
                <input type="hidden" id="last_touch_channel" name="last_touch_channel">
                <input type="hidden" id="last_touch_campaign" name="last_touch_campaign">
                <input type="hidden" id="last_touch_referrer" name="last_touch_referrer">
                <input type="hidden" id="last_touch_landing_page" name="last_touch_landing_page">
                <input type="hidden" id="last_touch_at" name="last_touch_at">

                <!-- Full Name -->
                <div class="form-floating mb-3">
                  <label for="full_name">Full Name <span class="text-danger">*</span></label>
                  <input type="text"
                    class="form-control"
                    id="full_name"
                    name="full_name"
                    placeholder=" ">

                  <span id="errmsgfullname" class="error-message"></span>
                </div>

                <!-- Mobile -->
                <div class="form-floating mb-3">
                  <label for="mobile">
                    Mobile <span class="text-danger">*</span>
                  </label>

                  <input
                    type="text"
                    class="form-control"
                    id="mobile"
                    name="mobile"
                    placeholder=" "
                    maxlength="10"
                    inputmode="numeric"
                    pattern="[6-9][0-9]{9}"
                    oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,10);">

                  <span id="errmsgmobile" class="error-message"></span>
                </div>

                <!-- Email -->
                <div class="form-floating mb-3">
                  <label for="email">Email <span class="text-danger">*</span></label>
                  <input type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder=" ">

                  <span id="errmsgemail" class="error-message"></span>
                </div>

                <!-- City -->
                <div class="form-floating mb-3">
                  <label for="city">City <span class="text-danger">*</span></label>
                  <input type="text"
                    class="form-control"
                    id="city"
                    name="city"
                    placeholder=" ">

                  <span id="errmsgcity" class="error-message"></span>
                </div>

                <!-- Procedure -->
                <div class="mb-3">
                  <div class="procedure-wrapper">
                    <label for="procedure">Procedure <span class="text-danger">*</span></label>
                    <select
                      id="procedure"
                      class="form-control">
                      <option value=""></option>
                    </select>
                    <input type="hidden" id="procedure_name" name="procedure">
                    <input type="hidden" id="procedure_id" name="procedure_id">
                  </div>

                  <span id="errmsgprocedure" class="error-message"></span>
                </div>

                <!-- Message -->
                <div class="form-floating mb-3">
                  <label for="message">Message</label>
                  <textarea class="form-control"
                    id="message"
                    name="Message"
                    placeholder=" "
                    style="height:180px"></textarea>


                  <span id="errmsgmessage" class="error-message"></span>
                </div>

                <!-- Submit -->
                <div class="text-center">
                  <button type="submit"
                    class="btn btn-blue blue-hover">
                    Submit Now
                  </button>
                </div>

              </form>
            </div>
          </div>
        </div>

      </div>

      <aside id="sidebar" class="col-lg-4"><br>
        <div class="map"><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15556.050660773453!2d77.59973899999997!3d12.906907000000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae151bc82db5f9%3A0xda6389d915267a4e!2sAK+Clinics+-+Hair+Transplant+Bengaluru!5e0!3m2!1sen!2sin!4v1440415994952" width="100%" height="400" frameborder="0" allowfullscreen="allowfullscreen" loading="lazy"></iframe></div>
        <br><br>
        <?= view('partials/services', ['important_links' => $important_links ?? []]) ?>

      </aside>
    </div>
  </div>
</div>
<script>
  const API_BASE_URL = "<?= env('api.baseURL') ?>";
  const CONTACT_SUBMIT_URL = "<?= site_url('contact/submit') ?>";
</script>


<script src="<?= base_url('js/contact.js') ?>?v=<?= @filemtime(FCPATH . 'js/contact.js') ?: time() ?>"></script>
<?= $this->endSection() ?>