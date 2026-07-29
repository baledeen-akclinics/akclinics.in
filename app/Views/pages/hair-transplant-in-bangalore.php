<?php
require APPPATH . 'Views/partials/location_city_logic.php';
if($req_url != "/hair-transplant-in-bangalore/" && $location_inpage == "")
{
  	header("HTTP/1.1 301 Moved Permanently");
  	header("Location:/hair-transplant-in-bangalore/");
	exit();
}    
$title = "Hair Transplant in Bangalore by Dr Kapil Dua - MBBS, MS, FISHRS, Dipl. ABHRS";
$keywords = "hair transplant in bangalore, hair transplant in bangalore cost, hair transplant at bangalore, hair transplant clinic bangalore, cost for hair transplant in bangalore, hair regrowth treatment, hair restoration in bangalore";
$description = "Get your Hair Transplant done from Dr Kapil Dua - India's top Hair Transplant Surgeon for natural results. Book your appointment to know more about hair transplant cost in Bangalore.";
$canonical_url = "https://www.akclinics.in".$req_url;
if($location_inpage == "")
    $canonical_url = "https://www.akclinics.in/hair-transplant-in-bangalore/";
?>

<?= view('partials/head', [
    'title' => $title ?? '',
    'keywords' => $keywords ?? '',
    'description' => $description ?? '',
    'canonical_url' => $canonical_url ?? current_url(),
]) ?>
<body>
<div id="loading" class="loader"></div>
<div id="page" class="page">
<header id="header" class="header">
<?= view('partials/header') ?>
</header>

<div id="htbanner" class="division">
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
<li class="breadcrumb-item active" aria-current="page">Hair Transplant in Bangalore</li>
<?php 
}else{?>
<li class="breadcrumb-item"><a href="/hair-transplant-in-bangalore/">Hair Transplant</a></li>
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

<div class="d-flexn">
	<h1 class="main-heading blue-color">
	<?php if($location_inpage == "")
    {?>
	 Hair Transplant in Bangalore
	<?php }else{?>
	    Hair Transplant in <?=ucwords($location_inpage)?>, Bangalore | Hair Re-growth Treatment & its Cost 
	<?php
	}
	?>
    </h1><br>
</div>
<?php if($location_inpage == "")
{?>
<p>When you see that you are losing more than just a few strands of hair every day, you are bound to be a little worried, but panic often sets in when you start noticing bald spots. If you are too starting to see bald spots or are worried about your receding hairline, it might be time to visit the best hair transplant clinic in Bangalore – at AK Clinics, you are in the safest hands! This is where some of the most renowned and acclaimed transplant surgeons practice their skills, this is where ground-breaking procedures are devised and this is where you will have access to the most modern devices and equipment! </p>
	<p>AK Clinics is led by <a href="/" class="orange-link">Dr. Kapil Dua</a>, MBBS, MS, FISHRS, Dipl. ABHRS - one of the foremost names in the world of hair transplant and restoration; he is a man who has been in the field for more than a decade and is on the board of several hair restoration forums. Under him practice several other surgeons, who are not only qualified and board certified, but also highly experienced. When they use modern machines, tools and equipment for your procedure, you can be assured that you will walk away with the type of results you wanted. </p>
<?php }else{?>
<p>Transform your look with the best quality <a href="/hair-transplant-in-bangalore/" class="orange-link">hair transplant in Bangalore</a> from India's leading hair transplant surgeon at affordable cost. 
Hair transplantation surgery is one of the safest way to treat baldness. Come and consult with our hair transplant surgeon in Bangalore at our hair transplant clinic in <?=ucwords($location_inpage)?>, If suffering from excess hair loss or baldness.  We have all modern hair transplant techniques including Bio-FUE & FUE Hair Transplant to treat your baldness permanently.</p> 
<p>AK Clinics is one of the leading hair transplant clinic in Bangalore founded by  <a href="/" class="orange-link">Dr. Kapil Dua</a>, MBBS, MS, FISHRS, Dipl. ABHRS - a world's renowned surgeon, to offer premium hair & skin service to the patient. We have all modern amenities, tools and equipment that help us to deliver the best results and make us best hair transplant center in <?=ucwords($location_inpage)?>, Bangalore</p>
<?php }?>
	
<h2 class="bg-primary">What is Hair Transplant?</h2>
<p>In the simplest of words, a hair transplant is a procedure, wherein hair is taken from one part of the head or at times, other parts of the body, and implanted into a region where there is less or no hair. There are mainly two types of transplant – FUT and FUE, and these are suggested to people who have heavy hair fall that has led to receding hairlines or bald spots. </p>


	

 
<h2 class="bg-primary">Ideal Candidates For Hair Transplant</h2>
<p>Now just because you are losing a lot of hair does not mean that you can get a transplant; you need to be adjudged a suitable candidate for the procedure. These are just some of the factors that will determine the ideal candidate:</p>
	<ul class="content-list">
<li>If your hair loss has stabilised because if you are still losing hair, there is not much point getting the transplant</li>
		<li>The pattern of the hair loss has to be conducive to a transplant</li>
		<li>There have to be clear donor and recipient areas and the donor area should have sufficient hair </li>
		
</ul>
 <br/>
<iframe align="middle" class="col-12" frameborder="0" width="100%" height="350px" scrolling="no"  src="https://www.youtube.com/embed/1R86VylfdK4?si=DY8v_3eLcPavi9eM" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> </p>
<p style="text-align:center"><strong>Is Hair Transplant Surgery Right for You? Discover the Ideal Candidate | Hair Transplant in Bangalore</strong></p>
  
  
<h2 class="bg-primary">Why Choose AK Clinics Bangalore For Hair Transplant?</h2>
	<ul class="content-list">
<li><strong>Experienced Surgeons:</strong> At AK Clinics Bangalore, our commitment to excellence in hair transplant surgery is led by the distinguished surgeons, Dr. Kapil Dua (MBBS, MS) and Dr. Aman Dua (MBBS, MD), bringing over 20 years of experience as leaders in the field.</li>
<li><strong>Innovative Techniques:</strong> We're proud to offer the Bio-FUE – An AK Clinics trademarked procedure. This advanced technique, introduced by our expert surgeons, ensures you get the best possible results, making us leaders in the field.</li>
<li><strong>Quality Hair Transplant at Affordable Costs:</strong> We believe everyone should have access to quality hair transplants that's why AK Clinics Bangalore, led by offers affordable options without compromising on the quality of your hair transplant surgery.</li>
<li><strong>Ensuring Your Safety:</strong> At AK Clinics Bangalore, patient safety is our topmost priority. We adhere to strict protocols & guidelines set by renowned international organizations such as ISHRS and AHRS. Our experienced surgeons, prioritize your well-being, guaranteeing safe and effective results through advanced sterilization methods and top-notch facilities. </li>
</ul>
  <br>
  <p style="text-align:center"><strong>Also watch: </strong>How to Choose the Right Surgeon for your Hair Transplant Surgery by Dr Kapil Dua</p>

<iframe align="middle" class="col-12" frameborder="0" width="100%" height="350px" scrolling="no"  src="https://www.youtube.com/embed/hsxa_gHVRaI?si=uuMOh3-FDlQrdN2m" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> </p>
<p style="text-align:center"><strong>Choosing the Right Hair Transplant Surgeon: Safety Measures & Tips You Need to Know | Hair Transplant in Bangalore</strong></p>
  

<h2 class="bg-primary">Process of Hair Transplant at AK Clinics, Bangalore</h2>
<p>On paper, the steps during hair transplant surgery are very simple – there is local anaesthesia, slit making, extraction and implantation. However, the amount of practice it takes to perfect each step is where the expertise and experience comes in. Each of these steps needs to be done with precision and here is how each one is done:</p>
	<ul class="content-list">

		<li><strong>Local anaesthesia –</strong> Local anaesthesia is administered in a controlled dose, which numbs the area of the procedure, but keeps you awake. You can actually talk to your surgeon or listen to some music while the procedure is happening. Alternately, if you are really worried about the procedure, you can ask your surgeon to sedate you completely. </li>
		<li><strong>Slit making –</strong> The making of slits is extremely important – this is where the grafts will be implanted. This is also the time when the direction of the grafts is set out and the density is planned out. </li>
		<li><strong>Extraction –</strong> Grafts are extracted very carefully and this is where the expertise of the surgeon comes to the forefront. It is very easy to damage or even completely destroy the grafts while extracting them, which is why it is essential that you choose an experienced surgeon. Post extraction, the grafts need to be handled with care, till the time of implantation comes. </li>
		<li><strong>Implantation –</strong> The final step is placing the grafts within the slits that the surgeon would have already created – it is important the grafts are placed in the right density and in the natural direction of the real hair. This way, when the new hair start to grow in, it will look lifelike and realistic. </li>
		
	</ul>
<?php if($location_inpage == "")
{?>	
<h2 class="bg-primary he ">Types of hair transplant in Bangalore</h2>
<p>If you were of the opinion that transplants were meant only for the head, then you would be mistaken – modern medicine and science have progressed so much that you can have a transplant in pretty much any part of the body. While the transplant on the head is the most common, you can get transplants on facial hair, including beard, moustache and eyebrows. Here are just some of the most common types of transplants:</p>

	<h3 class="f-13 h2-subheading"><a href="/hair-transplant-in-bangalore/" class="orange-link">Crown Hair transplant</a></h3>
	<p>Your head is your crowning glory and most people take great pride in their head of hair, which is why when they start to fall out, there is a general sense of worry. However, if your <a href="/hair-loss-treatment-in-bangalore/" class="orange-link">hair loss</a> has stabilised and you are categorised as an ideal candidate for a transplant, there are mainly two options for you. </p>
	
	<ul class="content-list">
		<li>The first one is a FUT or Follicular Unit Transplant in which a strip of hair is removed from the donor area (generally from the back of the head) and the required grafts are extracted from this strip and implanted into the donor area. </li>
		<li>The other is FUE or Follicular Unit Extraction where individual follicles are extracted using micro-punches and implanted simultaneously.  </li>
	</ul><br>
	
	<h3 class="f-13 h2-subheading"><a href="/beard-transplant-in-bangalore/" class="orange-link">Beard Hair Transplant</a></h3>
	<p>The beard has come back into fashion and how! There are several people who are now looking to flourish a beard that rivals those of celebrities. But what do you do if there is no real growth in your beard area – in such situations, beard and moustache hair transplantation is the best bet. Hair will be taken from viable parts of your body, which could include your head, your arms, chest or even your pubic region and this will be implanted into your chin and cheeks. Within a few months, you should be able to see a rich and thick beard. </p>
	<h3 class="f-13 h2-subheading"><a href="#" class="orange-link">Eyebrow transplant</a></h3>
	<p>It doesn’t matter whether you have really thin eyebrows or you lost them to an accident or illness, if you are worried that your eyebrows do not look the way they used to, you just might prove to a be a good enough candidate for an eyebrow transplant. The extraction of hair follicle is done pretty much the same way as it is for a normal crown transplant and the implantation method is also not much different. However, the hair used for an eyebrow transplant is generally harvested from the area right above the ears. The initial hair will fall out, but soon new and healthy hair will grow in its place. </p>
	
	<h3 class="f-13 h2-subheading"><a href="/revision-hair-transplant-in-bangalore/" class="orange-link">Revision Hair Transplant</a></h3>
	<p>You got a transplant from some random hair transplant clinic and now you are regretting it because you have not gotten the results you were hoping for. There is no actual reason for despair, because you can always consider a revision transplant, however, this is a procedure that you should get from a reputed clinic. Not only get you previous mistakes rectified, you can also get the procedure for more volume or fullness or to get a more realistic hairline. In a revision transplant, surgeons might choose to rectify the major problems, improve on what has already been done or negate everything and start afresh! </p>
	
	<h3 class="f-13 h2-subheading"><a href="#" class="orange-link">Body Hair Transplant</a></h3>
	<p>There are times when there are just not enough grafts to be harvested on the head; but that does not mean that such people cannot get a transplant. In such situations, the required hair is taken from other parts of the body including the beard, chest, arms, legs and even the pubic area. The same stands true for transplant for any other part of the body too – so if you are getting a facial hair transplant for your beard or eyebrows, hair can be harvested from there areas too. This procedure however is more often used for men, and it is important that the hair on their chest or beard are extremely thick.  </p>
<?php }?>	
	

<h2 class="bg-primary">Available Methods Of Hair Transplant at AK Clinics, Bangalore</h2>
<p>There are majorly two types of transplant procedures – FUT and FUE and there are a handful of clinics, such as AK Clinics, which offer additional procedure like Bio-FUE, a procedure that has been developed in-house and offers greater benefits as compared to regular FUE. </p>
	
	<h3 class="f-13 h2-subheading"><a href="/fue-hair-transplant-in-bangalore/" class="orange-link">Bio-FUE</a></h3>
	<p>This is a ground breaking procedure that has been developed in-house at AK Clinics and is shown to have better effects than a regular FUE. In the procedure, a traditional FUE or Follicular Unit Extraction is done first – hair follicles are removed individually via micro-punches and then implanted into the designated area. However, when you are getting a Bio FUE procedure done, there is an additional step – growth serums that are similar to ones used in <a href="/prp-treatment-for-hair-in-bangalore/" class="orange-link">PRP therapy</a> are injected into the implantation site. This is done not only to speed up the healing, but also provide better results. People who have undergone Bio FUE have spoken at lengths about how much better their hair growth has been! </p>
	
	<h3 class="f-13 h2-subheading"><a href="/fue-hair-transplant-in-bangalore/" class="orange-link">FUE Hair Transplant</a></h3>
	<p>FUE hair transplantation or Follicular Unit Extraction is a process that is most often chosen for people who have an overall thinning, rather than very large bald patches. In this process, the first step is to administer anaesthesia or in case the patient requests, sedation. The slits are made to ensure that there is a defined workspace for the surgeon; these are also made in accordance with natural direction of hair growth, so that the final hairline looks realistic and natural. The hair follicles are extracted one by one via micro-punches and the implantation is done within minutes, reducing the time that the follicles spend outside the body. </p>
	
	<h3 class="f-13 h2-subheading"><a href="/fut-hair-transplant-in-bangalore/" class="orange-link">FUT Hair Transplant</a></h3>
	<p>FUT or Follicular Unit Transplantation is a process which is advised to people who have large recipient areas – as in, the bald spots or receded hair line is extremely large. In this process, the donor region is identified first and a strip of hair is removed – it is from this strip that the required grafts will be removed. The place from where the strip has been removed will be stitched back carefully and this will leave a linear scar, which will normally get covered by the new hair growth. The grafts are carefully harvested from the strip of hair and these are then implanted into the slits that would have already been created. </p>
	
	<h3 class="f-13 h2-subheading"><a href="#" class="orange-link">Non-shave FUE Hair Transplant</a></h3>
	<p>Another transplant procedure you can consider is a non-shave FUE hair transplant in <?php if($location_inpage != '') echo ucwords($location_inpage).', ';?>Bangalore – this is the procedure of choice for people who do not wish to shave their entire head for the transplant. In this revolutionary method, only the hair that will act as donor hair are trimmed and then carefully extracted via micro-punches. Once the implanting is done, the hair will be combed over and not only will the procedure site get hidden, you will be able to return to work or any other commitment almost immediately. This is the procedure of choice for people who are either conscious about having to reveal that they are getting a transplant or those who have situations wherein they can’t shave. </p>
	
	
<h2 class="bg-primary">What is the Cost of Hair Transplant In Bangalore</h2>
<p>There are those who will tell you that they have fixed rates for their transplant procedures, but the fact is that there can be no flat rate, as the requirements of each person will vary. There are a number of factors that will affect the final costing, including:</p>
<ul class="content-list">
        <li>The experience and expertise of the surgeon</li>
		<li>The reputation of the clinic</li>
		<li>The location of the clinics</li>
	<li>The method of transplant being chosen</li>
	<li>The actual number of grafts needed  </li>
			</ul>	
	</br>
	<p>In most good and reputed clinics, the cost of 800-1000 grafts could lie anywhere between INR 45,000 to INR 1,00,000, while 3000-4000 grafts could cost you anywhere between INR 1,75,000 to INR 4,50,000. However, these are all tentative costs, because each person needs to be provided with customised estimates.  </p>
<p>When you come to AK Clinics, you will be given a proper examination, wherein your scalp will be analysed. After understanding the extent of your recipient area, the required number of grafts will be decided. By checking the donor area, the doctors will be able to judge whether the donor area on your scalp will be sufficient or hair follicles need to be taken from any other part of the body. All these aspects will be factored in and a bill amount will be shared with you.  </p>
<p>It is also important to remember that the number of grafts and sittings needed will play a large role in deciding which procedure will be a better choice for you. So, the cost of FUE hair transplant will be different from that what an FUT will cost you.  </p>

	
	<h2 class="bg-primary"> Do's and Don'ts Before Hair Transplant</h2>
<p>When you go to a clinic for a hair transplant at <?php if($location_inpage != '') echo ucwords($location_inpage).', ';?>Bangalore, ideally you should be given a thorough examination first, post which the suitable procedure, the number of grafts etc should be advised to you. Once you finalise the date of the procedure, you will be given a set of instructions that you need to follow before the procedure. Some of the most commonly given instructions include:</p>
	
	<ul class="content-list">
        <li>If you are on any medication, you need to talk to your surgeon beforehand – you might be asked to stop certain medicines or alternative will be provided to you. </li>
		<li>You will be asked to avoid blood thinners, aspirins and anti-inflammatory medications for a week before the procedure. </li>
		<li>You will be asked to avoid smoking and alcohol consumption a few days before the procedure.</li>
		<li>You will be required to wash your hair and scalp really well before the first sitting.</li>
		<li>Don’t get any haircuts or chemical treatments such as colouring or straightening before the procedure – the hair should ideally be on the longer side. </li>
			</ul>
	
	<h2 class="bg-primary"> Do's and Don'ts After Hair Transplant</h2>
<p>For people who want <a href="/before-after-results/" class="orange-link">hair transplant results</a> that are truly happy about, it is essential that all the post operative instructions are followed, you will be able to see hair that look great and feel natural within the assured time and these include:</p>
	
	<ul class="content-list">
        <li>It is absolutely essential that you not touch the grafts and the area of the procedure in general, because the grafts are really fragile and delicate and can fall out. </li>
		<li>Sleep with your head slightly elevated (use larger or extra pillows) to ensure better blood flow.</li>
		<li>There could be swelling above the eyebrows in the days after the procedure, and you should apply ice on the same. </li>
		<li>Make sure that you ask about when you can wash your hair and on the day, make sure that you do not stand underneath a shower – use a mug and pour the water very gently. </li>
		<li>You will be asked to avoid alcohol and smoking for a few more days, post procedure, but you should be allowed your regular diet and plenty of water. </li>
		
	</ul>

	
	
	
	
	
</div>
<?php if($location_inpage == "")
{?>	
<section id="faqs-page" class="wide-20 faqs-section division">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="questions-holder">
            <h3 class="h3-md bg-primary" style="margin-top: 9px;">Frequently Asked Questions</h3>    
            <h2 class=" steelblue-color">Where is the best place for hair transplant in Bangalore?</h2>
			  <p class="home_page_p_font"> Although there are plenty of transplant clinics in Bangalore, there are only a few that are truly trustworthy. For instance, the finest and most effective hair transplant in Bangalore is AK Clinics. Here, you will not only get access to some of the best surgeons in the country, but also modern methods and sophisticated tools and equipment. When you come to AK Clinics, you will be given a proper examination, post which your options will be discussed with you. </p>
           
            <div id="accordion" role="tablist">
              
              <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                  <h2 class="h5-xs main-page-faq-heading"> <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">Who is the best hair transplant surgeon in Bangalore?</a> </h2>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" style="">
                  <div class="card-body">
                    <p>If you are in Bangalore and you are looking for the top <a href="/" class="orange-link">hair transplant surgeon in Bangalore</a>, then your one and only option should be Dr Kapil Dua! Not only is he an extremely experienced and qualified surgeon, he is also on the board of several boards and associations in the world of hair transplant. He has been practising hair transplant methods exclusively for over a decade now and has innumerable successful procedures under his belt. </p>
					
					  
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingThree">
                  <h2 class="h5-xs main-page-faq-heading"> <a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Do I need to shave my head before hair transplant?</a> </h2>
                </div>
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    <p>This is something that will be dependent on the type of hair restoration surgery you are considering – for instance, if you are getting an FUT procedure, you might not need to shave your head, as only a strip of hair will be removed from your scalp. In such a scenario, the rest of the hair would actually provide cover to the scar site. However, in FUE, you might be advised shaving of the entire head, providing for a clean area of work for the surgeon. </p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingFour">
                  <h2 class="h5-xs main-page-faq-heading"> <a class="collapsed" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">Why it is recommended that you choose experienced doctors over cheap hair transplant surgery?</a> </h2>
                </div>
                <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                  <div class="card-body">
                    <p>Rather than looking at the hair transplant cost in Bangalore, it is imperative that you look at the doctors, the quality of the clinic and the options of services being offered to you. When you choose a reputed clinic, you are bound to have an experienced, certified and licensed surgeon performing your procedure. This means that the chances of anything going wrong are minimal. Moreover, your procedure will be done with modern machines and equipment. </p>
					 	
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingFour1">
                  <h2 class="h5-xs main-page-faq-heading"> <a class="collapsed" data-toggle="collapse" href="#collapseFour1" role="button" aria-expanded="false" aria-controls="collapseFour">Artificial Hair Restoration or Hair Transplant - Which one is Better?</a> </h2>
                </div>
                <div id="collapseFour1" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                  <div class="card-body">
                    <p>Although both artificial hair restoration and transplant are similar in their foundation – as in hair is implanted into areas where there is loss of hair. However, in a hair transplant, hair from your own head or body will be used, while artificial hair restoration utilised bio-fibers or synthetic hair. The decision as to which is the better option for you will be vary from person to person and is something that is best suggested by an experienced surgeon. </p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingSix">
                  <h2 class="h5-xs main-page-faq-heading"> <a class="collapsed" data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="false" aria-controls="collapseSix">What are the side effects of Hair Transplantation?</a> </h2>
                </div>
                <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion">
                  <div class="card-body">
                    <p>At the end of the day, a transplant is a medical procedure, and it is imperative that you adhere to all the hair transplant post operative care instructions that you are given. However, you need to be prepared for a few side effects, like swelling, itching and even slight bleeding, all of which are normal. There could also be a little bruising and the area of the transplant will feel slightly painful and irritated. </p>
                  </div>
                </div>
              </div>
				
				   <div class="card">
                <div class="card-header" role="tab" id="headingSeven">
                  <h2 class="h5-xs main-page-faq-heading"> <a class="collapsed" data-toggle="collapse" href="#collapseSeven" role="button" aria-expanded="false" aria-controls="collapseSeven">Which of the hair transplant Technique is Best for better Results: FUE Or FUT ?</a> </h2>
                </div>
                <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven" data-parent="#accordion">
                  <div class="card-body">
                    <p>Even though both FUT and FUE are methods of transplant, the choice is made based on several factors including the type of hair loss, the extent of the donor and recipient areas, the type of hair, to name a few. The choice of which procedure will be better for you is one that should be taken with the advice of an experienced surgeon – let the expert examine you and then guide you down the right path. </p>
                  </div>
                </div>
              </div>
			              <br>
  

<iframe align="middle" class="col-12" frameborder="0" width="100%" height="350px" scrolling="no"  src="https://www.youtube.com/embed/uQ3lhZYsSEI?si=whyIyK7kkdbiwWCK" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> </p>
<p style="text-align:center"><strong>Also watch: </strong>6 Mostly Asked Questions about Hair Transplant | Expert’s Opinion : Dr Kapil Dua | AK Clinics<br>
            
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


	<?= view('partials/footer') ?>
