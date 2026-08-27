<link rel="stylesheet" href="<?= base_url('css/book-appointment.css') ?>">
<div class="sidebar-timetable sidebar-div mt-20 mb-50" style="background:#fff;" id="book_appointment_form">
    <h5 class="h5-md mb-20 pad-20 text-center button-glow" style="color:#333;">BOOK APPOINTMENT</h5>
    <div class="col-lg-12">
        <!--<form method="POST">-->
        <form action="<?= site_url('book-appointment') ?>" method="POST" id="formRequestCallback" name="formRequestCallback" novalidate>
            <!--<input style="display: none;" name="lp_url" type="hidden" value="https://akclinics.org/">-->
            <!--<input style="display: none;" name="return_url" type="hidden" value="https://akclinics.org/thanks.html">-->
            <!--<input style="display: none;" name="lead_source" type="hidden" value="9">-->
            <!--<input style="display: none;" name="enquire_for" type="hidden" value="Hair Transplant">-->
            <input name="c_submition" type="hidden" value="true">
            <input style="display: none;" name="source_website" type="hidden" value="akclinics.in">
            <input type="hidden" id="page_url" name="page_url" value="">
            <input type="hidden" id="form_name" name="form_name" value="Book Appointment">
            <input type="hidden" id="campaign_id" name="campaign_id" value="">
            <input type="hidden" id="campaign_name" name="campaign_name" value="">

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
            <!--<div class="error-form display-hide">Failed !! please check required fields….</div>-->
            <?php if (isset($_REQUEST['status']) && $_REQUEST['status'] == 'success') { ?>
                <div style="color: green;" class="success-form display-hide1">Thank you for submitting your details, Our patient advisor will contact you soon.</div>
            <?php } ?>
            <div class="form-group" id="formlead">
                <input type="text" class="form-control " name="Name" id="name" placeholder="Full name*">
                <span id="errmsgname" class="error-message text-danger"></span>
            </div>
            <div class="form-group" id="formlead">
                <input
                    type="text"
                    class="form-control"
                    name="Mobile"
                    placeholder="Mobile*"
                    maxlength="10"
                    inputmode="numeric"
                    oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,10);">
                <span id="errmsg" class="error-message text-danger"></span>
            </div>
            <div class="form-group" id="formlead">
                <input type="email" class="form-control" id="email" name="Email" placeholder="Email*">
                <span id="errmsgEmail" class="error-message text-danger"></span>
            </div>
            <div class="form-group" id="formlead">
                <input type="text" class="form-control " name="City" placeholder="City*">
                <span id="errmsgcity" class="error-message text-danger"></span>
            </div>
            <div class="form-group" id="formlead">

                <div class="procedure-wrapper">

                    <select
                        id="procedure"
                        class="form-control">
                        <option value=""></option>
                    </select>

                    <input type="hidden" id="procedure_name" name="procedure">
                    <input type="hidden" id="procedure_id" name="procedure_id">

                </div>

                <span id="errmsgprocedure" class="error-message text-danger"></span>

            </div>
            <div class="form-group" id="formlead">
                <!--<input type="text" class="form-control " name="Preferred_Time" placeholder="Preferred Time To Call*" required="required">-->
                <select name="Preferred_Time" id="Preferred_Time" class="form-control">
                    <option value="">Preferred Time To Call*</option>
                    <option value="10:00 AM">10:00 AM</option>
                    <option value="11:00 AM">11:00 AM</option>
                    <option value="12:00 PM">12:00 PM</option>
                    <option value="01:00 PM">01:00 PM</option>
                    <option value="02:00 PM">02:00 PM</option>
                    <option value="03:00 PM">03:00 PM</option>
                    <option value="04:00 PM">04:00 PM</option>
                    <option value="05:00 PM">05:00 PM</option>
                    <option value="06:00 PM">06:00 PM</option>
                    <option value="07:00 PM">07:00 PM</option>
                </select>
                <span id="errmsgtime" class="error-message text-danger"></span>
            </div>
            <div class="pdt10 pdb10 text-center">
                <button type="submit" name="submition" class="btn btn-blue blue-hover  mt-2 mb-2" id="sbtForm">Request Call Back</button>
            </div>
        </form>
    </div>
</div>
<script>
    const API_BASE_URL = "<?= env('api.baseURL') ?>";
</script>