<?php
$title = "Contact Us - AK Clinics Indiranagar Bangalore";
$keywords = "";
$description = "";
$canonical_url = "https://www.akclinics.in/contact/";
?>

<?= view('partials/head', [
    'title' => $title ?? '',
    'keywords' => $keywords ?? '',
    'description' => $description ?? '',
    'canonical_url' => $canonical_url ?? current_url(),
]) ?>
<body>
<!--<div id="loading" class="loader"></div>-->
<div id="page" class="page">
<header id="header" class="header">
<?= view('partials/header') ?>
</header>
<style>.form-control {
    height: 42px !important;
    margin: 7px 0;
    font-size: 16px;
    line-height: 1;
    font-weight: 400;
    border: 2px solid #ddd;
    padding: 4px 15px;
}</style>

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

</div></div>

<div class="col-md-6"><div class="contact-box mb-40">
<p><i class="fa fa-envelope-o"></i>&nbsp; Email &nbsp;&nbsp;&nbsp;: info@akclinics.in</p>
<p><i class="fa fa-mobile"></i>&nbsp;&nbsp;&nbsp;Mobile &nbsp;: <a href="tel:+919779162190">+919779162190</a></p></div></div>
<div class="col-md-12">

<div class="form-holder mb-40" id="contact_us_form">
<h1 class="section-id blue-color">Contact us</h1>
<form action="<?= site_url('submit_form_new') ?>" method="POST"  id="formRequestCallback" name="formRequestCallback">
            <!--<input style="display: none;" name="lp_url" type="hidden" value="https://akclinics.org/">-->
            <!--<input style="display: none;" name="return_url" type="hidden" value="https://akclinics.org/thanks.html">-->
            <!--<input style="display: none;" name="lead_source" type="hidden" value="9">-->
            <!--<input style="display: none;" name="enquire_for" type="hidden" value="Hair Transplant">-->
            <input name="c_submition" type="hidden" value="true">
            <input style="display: none;" name="source_website" type="hidden" value="akclinics.in">
            <input style="display: none;" name="page_url" type="hidden" value="<?= site_url('contact') ?>">
            <!--<div class="error-form display-hide">Failed !! please check required fields….</div>-->
            <?php if(isset($_REQUEST['status']) && $_REQUEST['status'] == 'success')
            {?>
            <div style="color: green;" class="success-form display-hide1">Thank you for submitting your details, Our patient advisor will contact you soon.</div>
            <?php }?>
            
            
            
                            <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Full Name</label>
                            <div class="col-sm-10">
                           <input type="text" class="form-control " name="Name" id="name" placeholder="Full name*" required="required">
                            <span id="errmsgname"></span>
                            </div>
                            </div>
                <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Mobile</label>
                            <div class="col-sm-10">
                           <input type="number" class="form-control " name="Mobile" placeholder="Mobile*" required="required">
                             <span id="errmsg"></span>
                            </div>
                            </div>
            <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                          <input type="email" class="form-control" id="email" name="Email" placeholder="Email*" required="required">
                <span id="errmsgEmail"></span>
                            </div>
                            </div>
            
             <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">City*</label>
                            <div class="col-sm-10">
                        <input type="text" class="form-control " name="City" placeholder="City*" required="required"><span id="errmsgcity"></span>
                <span id="errmsgEmail"></span>
                            </div>
                            </div>
            <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Message*</label>
                            <div class="col-sm-10">
                        <textarea class="form-control " name="Message" placeholder="Message*" required="required" row="3" style="height:100px !important;"></textarea><span id="errmsgcity"></span>
                <span id="errmsgEmail"></span>
                            </div>
                            </div>
          
    	
            <div class="pdt10 pdb10 text-center">             
                <button type="submit" name="submition" class="btn btn-blue blue-hover  mt-2 mb-2" id="">Submit Now</button>
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

		<?= view('partials/footer') ?>
