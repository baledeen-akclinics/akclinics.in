<div class="sidebar-timetable sidebar-div mt-20 mb-50" style="background:#fff;" id="book_appointment_form">
    <h5 class="h5-md mb-20 pad-20 text-center button-glow" style="color:#333;">BOOK APPOINTMENT</h5>				  
    <div class="col-lg-12">
        <!--<form method="POST">-->
        <form action="<?= site_url('submit_form_new') ?>" method="POST"  id="formRequestCallback" name="formRequestCallback">
            <!--<input style="display: none;" name="lp_url" type="hidden" value="https://akclinics.org/">-->
            <!--<input style="display: none;" name="return_url" type="hidden" value="https://akclinics.org/thanks.html">-->
            <!--<input style="display: none;" name="lead_source" type="hidden" value="9">-->
            <!--<input style="display: none;" name="enquire_for" type="hidden" value="Hair Transplant">-->
            <input name="c_submition" type="hidden" value="true">
            <input style="display: none;" name="source_website" type="hidden" value="akclinics.in">
            <input style="display: none;" name="page_url" type="hidden" value="<?= current_url() ?>">
            <!--<div class="error-form display-hide">Failed !! please check required fields….</div>-->
            <?php if(isset($_REQUEST['status']) && $_REQUEST['status'] == 'success')
            {?>
            <div style="color: green;" class="success-form display-hide1">Thank you for submitting your details, Our patient advisor will contact you soon.</div>
            <?php }?>
            <div class="form-group" id="formlead">                    
                <input type="text" class="form-control " name="Name" id="name" placeholder="Full name*" required="required">
                <span id="errmsgname"></span>
            </div>                           
            <div class="form-group" id="formlead">
                <input type="number" class="form-control " name="Mobile" placeholder="Mobile*" required="required">
                <span id="errmsg"></span>
            </div>
            <div class="form-group" id="formlead">
                <input type="email" class="form-control" id="email" name="Email" placeholder="Email*" required="required">
                <span id="errmsgEmail"></span>
            </div> 
    		<div class="form-group" id="formlead">
                <input type="text" class="form-control " name="City" placeholder="City*" required="required"><span id="errmsgcity"></span>
            </div>
            <div class="form-group" id="formlead">
                <!--<input type="text" class="form-control " name="Services" placeholder="Services*" required="required">-->
                <select name="c_enquire_for" id="c_service" class="form-control" required="required">
                    <option value="">Services*</option>
                    <option value="Hair Transplant">Hair Transplant</option>
                    <option value="Hair Loss Treatment">Hair Loss Treatment</option>
                    <option value="Laser Hair Removal">Laser Hair Removal</option>
                    <option value="PRP">PRP Therapy</option>
                    <option value="Botox Treatment">Botox Injections</option>
                    <option value="Dermal Fillers">Dermal Fillers</option>
                    <option value="Acne treatment">Acne treatment </option>
                    <option value="Carbon Peel">Carbon Peel Facial </option>
                    <option value="Skin Whitening Treatment">Skin Whitening Treatment</option>
                    <option value="Stretch Marks Treatment">Stretch Marks Treatment</option>
                    <option value="Pigmentation Treatment">Pigmentation Treatment</option>
                    <option value="Tattoo Removal">Laser Tattoo Removal</option>
                    <option value="Others">Others</option>
                </select>
                <span id="errmsgc_service"></span>
            </div>
    		<div class="form-group" id="formlead">
                <!--<input type="text" class="form-control " name="Preferred_Time" placeholder="Preferred Time To Call*" required="required">-->
                <select name="Preferred_Time" id="Preferred_Time" class="form-control" required="required">
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
                <span id="errmsgcity"></span>
            </div>   
            <div class="pdt10 pdb10 text-center">             
                <button type="submit" name="submition" class="btn btn-blue blue-hover  mt-2 mb-2" id="sbtForm">Request Call Back</button>
            </div>
        </form>
    </div>               
</div>