<?php
require APPPATH . 'Views/partials/location_city_logic.php';
if($req_url != "/tattoo-removal-in-bangalore/" && $location_inpage == "")
{
  	header("HTTP/1.1 301 Moved Permanently");
  	header("Location:/tattoo-removal-in-bangalore/");
	exit();   
}    
$title = "Tattoo Removal in ". ucwords($location_inpage)." Bangalore | Best Clinic for Tattoo Removal & Its Cost";
$keywords = "tattoo removal in ".$location_inpage." bangalore, tattoo removal near me, tattoo removal clinic in ".$location_inpage." bangalore, tattoo removal clinic in ".$location_inpage." bangalore, laser tattoo removal cost in ".$location_inpage." bangalore, tattoo removal ".$location_inpage." bangalore, tattoo removal centre in ".$location_inpage." bangalore";
$description = "Remove unwanted tattoo with Laser now. Consult now for Laser Tattoo removal in ". ucwords($location_inpage)." Bangalore at affordable cost from expert skin specialist.";
$canonical_url = "https://www.akclinics.in".$req_url;
if($location_inpage == "")
    $canonical_url = "https://www.akclinics.in/tattoo-removal-in-bangalore/";
?>

<?= $this->extend('layouts/app') ?>

<?= $this->section('title') ?><?= esc($title) ?><?= $this->endSection() ?>
<?= $this->section('keywords') ?><?= esc($keywords) ?><?= $this->endSection() ?>
<?= $this->section('description') ?><?= esc($description) ?><?= $this->endSection() ?>
<?= $this->section('canonical') ?><?= esc($canonical_url) ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
<div id="tattooremoval" class="division">
<div class="container">
<div class="row">
<div class="col">
<div class=" breadcrumb-holder">
</div>
</div>
</div> 
</div> 
</div> 
<div class="row head_bg">
<div class="container">
<div class="row">
<div class="col-md-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="/">Home</a></li>
<?php if($location_inpage == ""){?>
<li class="breadcrumb-item active" aria-current="page">Laser Tattoo Removal in Bangalore</li>
<?php 
}else{?>
<li class="breadcrumb-item"><a href="tattoo-removal-in-bangalore/">Laser Tattoo Removal</a></li>
<li class="breadcrumb-item active" aria-current="page"> <?=ucwords($location_inpage)?>, Bangalore</li>
<?php }
?>
</ol>
</div>
</div>
</div>
</div>

<div id="service-page" class="wide-60 service-page-section division">
<div class="container">
<div class="row">

<div class="col-lg-8">
<div class="s2-page pr-30 mb-40 m_bg">
<?php if($location_inpage == ""){?>
<div class="d-flexn">
	<h1 class="main-heading blue-color">Tattoo Removal in Bangalore</h1><br></div>

<p>Getting a tattoo is a big decision – you are getting inked in a way that will not disappear with soap and water; but what if you don’t want the tattoo anymore? Then you need to locate the place where you can get the best tattoo removal in Bangalore, because you need to make sure that you have the best doctor, the most modern equipment and state of the art procedures, because this is not a simple procedure.</p>
	<p>When you are talking about tattoo removal, the ink that has been inserted into the skin has to be removed, which is a task that needs to be done by experienced hands. At <a href="/" class="orange-link">AK Clinics</a>, you can get your tattoo removal done by experts who are highly skilled and trained for the same. </p>
<?php }else{?>
<div class="d-flexn">
	<h1 class="main-heading blue-color">Tattoo Removal in <?=ucwords($location_inpage)?> - Laser Tattoo Removal Cost in <?=ucwords($location_inpage)?></h1><br></div>

<p>A tattoo is a decision that is not to be made on a whim – this is ink that will sit right underneath your skin and will remain there for a really long time. However, if your tattoo has been made on a whim or you are now regretting having gotten the ink on your skin, there is no reason why you have to be worried. At <a href="/" class="orange-link">AK Clinics</a>, you can get laser <a href="/tattoo-removal-in-bangalore/" class="orange-link">tattoo removal in Bangalore</a> that is effective – this is so because at our clinic, you will have access to some of the most experienced dermatologists and skin experts and they will be able to not only assess the details of the tattoo, but also suggest the best course of treatment for you. And while you need to keep your expectations real – you might need more than one session to get rid of the tattoo and there is a chance that the tattoo is not removed completely, you need not worry we will offer you the best laser tattoo removal in <?=ucwords($location_inpage)?>. </p>
<?php }?>
<h2 class="bg-primary">How does Laser Tattoo Removal work?</h2>
<p>Tattoo removal is generally done using laser – the wavelength of the laser is able to penetrate the skin and destroy the pigments that are present in the ink. When you sign up for <a href="/tattoo-removal-in-bangalore/" class="orange-link">permanent tattoo removal in Bangalore</a>, your tattoo will first be checked – the size, the colours used and where the tattoo is located. Once these have been figured out, the laser will be directed at the tattoo – black is the easiest colour to remove, which is why monochrome tattoos can be removed faster. The number of sessions needed will also be based on factors like size, colours and location. </p>


	

 
<h2 class="bg-primary">Types of Tattoo Removal</h2>
<p>When you go to a reputed clinic for tattoo removal, there are mainly 3 methods of doing the same. These include:</p>
	<ul class="content-list">
<li><strong>Surgical removal – </strong>For the longest time, this was the most common method of tattoo removal – the skin where the tattoo is placed would be cut out and the area would be stitched back together. This however, would often leave a scar that could be obvious. </li>
		<li><strong>Dermabrasion –</strong> This process literally abrades the top layer of the skin, revealing younger and healthier skin that sits just underneath. By using this procedure, the tattoo can be made lighter and with multiple sessions, it can become almost invisible. </li>
		<li><strong>Laser surgery –</strong> This is easily the most popular and effective method of tattoo removal – laser is directed towards the pigments in the tattoo ink and that helps dissolve the same. </li>
</ul>

<h2 class="bg-primary">Cost of Tattoo Removal in Bangalore</h2>
<p>It would be impossible to give a blank quote for a tattoo removal, because the cost is dependent on a range of factors. For instance, surgical tattoo removal cost will vary from laser tattoo removal cost in Bangalore. Other factors will include:</p>
	<ul class="content-list">

		<li>How large the tattoo is – larger the tattoo the more it will cost</li>
		<li>How many colours are in the tattoo – the more the colours, the more it could cost</li>
		<li>Where the tattoo is located – sensitive parts of the body could pose a slight challenge</li>
		<li>How experienced the doctor performing the procedure is could also play a role in the final cost</li>
</ul>
<h2 class="bg-primary">Pre-op Instructions for Tattoo Removal</h2>
<p>If you have decided that you want to go for permanent tattoo removal in Bangalore, it is imperative that you have a face to face consultation first. Before your procedure, you will be asked to do a few things, like:</p>
	
	
	<ul class="content-list">
<li>Taking a proper shower and ensuring that the area of the tattoo is clean</li>
				<li>Not applying any chemicals on the area</li>
		<li>Not wearing any strong lotions </li>
		<li>Informing in advance about any regular medications </li>
		<li>Not getting any tanning or body colouring </li>
<li>Keeping the area protected from excessive sunlight </li>

	</ul>
	
	

<h2 class="bg-primary">	After-care instructions for laser tattoo removal?</h2>
<p>Once the procedure is over, you will be given several instructions that you will need to follow and it is important that you do so, because that will determine how quickly your healing and recovery happens. These instructions will include:</p>
<ul class="content-list">
        <li>There is bound to be some itching, redness and rashes, but it is important that you not pick on them</li>
		<li>You can use ice packs to relieve the discomfort</li>
<li>You will be asked to avoid over exposure to sunlight</li>
		<li>No heat related treatments such as tanning beds should be done</li>
		<li>Physical activity will need to be avoided for a few days</li>
</ul>	
	
	<h2 class="bg-primary">Choosing Best Clinics for Laser Tattoo Removal?</h2>
<p>How do you choose the <a href="/tattoo-removal-in-bangalore/" class="orange-link">best clinic for tattoo removal</a> – this is a question that needs to be asked first and foremost. Here are some of the factors that you need to keep in mind while making the choice:</p>
<ul class="content-list">
        <li>Look for a clinic that has experts who handle tattoo removal – ask about the experience of the doctor who will be performing your procedure</li>
		<li>Choose a clinic that is well equipped to tackle your requirements</li>
		<li>The geographic location also makes a difference – look for a clinic that is in a decent location</li>
</ul>	
</div>
<?php if($location_inpage == ""){?>	
	<section id="faqs-page" class="wide-20 faqs-section division">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="questions-holder">
            <h3 class="h3-md bg-primary" style="margin-top: 9px;">Frequently Asked Questions</h3>
           <h2 class=" steelblue-color">Can a tattoo be removed completely?</h2>
			  <p class="home_page_p_font">When you get a tattoo made, the ink is being placed underneath the skin, which means that complete removal of the tattoo might not be possible. However, with proper treatment, it should be possible to reduce the obvious appearance of the tattoo and they should become a lot more faded and lighter. </p>
           
            <div id="accordion" role="tablist">
              
              
              <div class="card">
                <div class="card-header" role="tab" id="headingThree">
                  <h2 class="h5-xs main-page-faq-heading"> <a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Is Laser Tattoo Removal painful?</a> </h2>
                </div>
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    <p>The removal of tattoos is done via laser and the process is quite similar to laser hair removal – a laser beam is directed towards the tattoo and the heat that is generated breaks up the colour pigments. Those who have undergone the procedure have said that there is no pain, but a slight discomfort – it could either by like a bad sunburn or like a rubber band snapping against your skin. </p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingFour">
                  <h2 class="h5-xs main-page-faq-heading"> <a class="collapsed" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">How many sessions are needed for tattoo removal?</a> </h2>
                </div>
                <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                  <div class="card-body">
                    <p>This is something that will depend on several factors such as the size of the tattoo, which part of the body it is located in and how many colours have been used. Moreover, the type of machines being used for the removal will also help decide how many sessions will be needed. </p>
					 	
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingFour1">
                  <h2 class="h5-xs main-page-faq-heading"> <a class="collapsed" data-toggle="collapse" href="#collapseFour1" role="button" aria-expanded="false" aria-controls="collapseFour">Are there any side effects of laser tattoo removal?</a> </h2>
                </div>
                <div id="collapseFour1" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                  <div class="card-body">
                    <p>In most cases, there are very side effects of laser tattoo removal, especially when it has been done by a professional. However, there could be a little swelling in the area where the procedure has been done; there could be rashes, redness and a little itching. But these should subside in some time.   </p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingSix">
                  <h2 class="h5-xs main-page-faq-heading"> <a class="collapsed" data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="false" aria-controls="collapseSix">How much time required in one sitting?</a> </h2>
                </div>
                <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion">
                  <div class="card-body">
                    <p>Yet again, this is something that will be dependent on factors such as how big the tattoo is, how many colours are used for it and where it is located. In general, a single session could last anywhere between 10 to 60 minutes and for the complete removal of the tattoo, you might need more than one session. </p>
                  </div>
                </div>
              </div>
				
				<div class="card">
                <div class="card-header" role="tab" id="headingSev">
                  <h2 class="h5-xs main-page-faq-heading"> <a class="collapsed" data-toggle="collapse" href="#collapseSev" role="button" aria-expanded="false" aria-controls="collapseSev">What is Post-procedure care in tattoo removal ?</a> </h2>
                </div>
                <div id="collapseSev" class="collapse" role="tabpanel" aria-labelledby="headingSev" data-parent="#accordion">
                  <div class="card-body">
                    <p>Once the tattoo removal session has been completed, you will be asked to keep the treated area clean. You will be asked to not apply any products or chemical cosmetics. You will also be asked to avoid direct exposure to the sun. There could be redness or irritation, but it should fade away on its own. </p>
                  </div>
                </div>
              </div>
				
				<div class="card">
                <div class="card-header" role="tab" id="headingeig">
                  <h2 class="h5-xs main-page-faq-heading"> <a class="collapsed" data-toggle="collapse" href="#collapseeig" role="button" aria-expanded="false" aria-controls="collapseeig">Will laser tattoo removal leave a scar?</a> </h2>
                </div>
                <div id="collapseeig" class="collapse" role="tabpanel" aria-labelledby="headingeig" data-parent="#accordion">
                  <div class="card-body">
                    <p>Unless there was already a scar in the general of the tattoo, you should not have any scarring. When the procedure has been done properly, there should not be any scars. Alternately, if you do not take the precautions suggested to you, there could be infection and that could lead to some possible scarring. </p>
                  </div>
                </div>
              </div>
				
				<div class="card">
                <div class="card-header" role="tab" id="headingnin">
                  <h2 class="h5-xs main-page-faq-heading"> <a class="collapsed" data-toggle="collapse" href="#collapsenin" role="button" aria-expanded="false" aria-controls="collapsenin">Is laser tattoo removal suitable for all skin types?</a> </h2>
                </div>
                <div id="collapsenin" class="collapse" role="tabpanel" aria-labelledby="headingnin" data-parent="#accordion">
                  <div class="card-body">
                    <p>On paper, laser tattoo removal works on all skin types, it is known to show better results with lighter skin – this is so because if your skin has lesser melanin, the laser is able to focus on the darker colours of the tattoo ink. Your doctor should be able to guide you better in this regards. 

</p>
                  </div>
                </div>
              </div>
			
            <div class="card">
                <div class="card-header" role="tab" id="headingten">
                  <h2 class="h5-xs main-page-faq-heading"> <a class="collapsed" data-toggle="collapse" href="#collapseten" role="button" aria-expanded="false" aria-controls="collapseten">Does tattoo removal cause cancer?</a> </h2>
                </div>
                <div id="collapseten" class="collapse" role="tabpanel" aria-labelledby="headingten" data-parent="#accordion">
                  <div class="card-body">
                    <p>While there are no studies that show that tattoo removal can lead to cancer, the ink that are used for making tattoos could lead to some problems. However, the treatment could make the skin photosensitive and that is one of the factors that could lead to melanoma or skin cancer. </p>
                  </div>
                </div>
              </div>
              </div>
            </div>		
			<br>
			
          </div>
        
      </div>
    </div>
  </section>
<?php }?>	
	
</div> 
<aside id="sidebar" class="col-lg-4">
<?php
//book appointment form
echo view('partials/book_appointment');
?>
<?= view('partials/services', ['important_links' => $important_links ?? []]) ?> 

</aside> 
</div> 
</div> 
</div> 


 <?php
  // testimonials
  echo view('partials/testimonials');
  ?>
<?= $this->endSection() ?>
