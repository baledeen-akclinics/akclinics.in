<?php
$title = "Privacy Policy - AK Clinics";
$keywords = "";
$description = "";
$canonical_url = "https://www.akclinics.in/privacy-policy/";
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


<div class="row head_bg">
<div class="container">
<div class="row">
<div class="col-md-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
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
	<h1 class="main-heading blue-color">Our Privacy Policies </h1><br></div>

<p>AK Clinics Pvt Ltd., more popularly identified as AK Clinics – Hair Restoration & Aesthetic Dermatology, considers the privacy of every individual of utmost importance. The below mentioned are the privacy policies we follow for all of our website including <a href="/" class="orange-link">akclinics.in</a>.</p>
	
<h2 class="bg-primary">What all we collect? </h2>
<p>In order to provide our clients with the right information and ensure that they can be offered with the right kind of services, we need to collect some basic data. This includes:</p>

<ul class="content-list">

		<li>Name</li>
		<li>Address</li>
		<li>Email Address</li>
		<li>Phone Number</li>
	<li>Gender</li>
		<li>City</li>
	<li>Country</li>
</ul>
	<p>All this data is strictly for our personal use and is not shared with any third party. </p>

 
<h2 class="bg-primary">Data Security </h2>
<p>We ensure that all possible standard operating procedures are utilised, in both technical as well as administrative aspects, in order to keep all data secure. Each employee of ours is bound by this code of ethics. In case you find any of our employees working otherwise, please feel free to write to us at - <a href="mailto:info@akclinics.in">info@akclinics.in</a></p>

<h2 class="bg-primary">Websites not owned by us </h2>
<p>Our websites are often linked to third party websites, in order to give better our patients better or more in-depth information. However, the data security of these websites is outside our control and we are not liable for the same. In case you have any concerns regarding this, please email us at <a href="mailto:info@akclinics.in">info@akclinics.in</a></p>
	
<h2 class="bg-primary">What all can you copy </h2>
<p>The content on our website is meant to offer you information and we welcome you to view, download and print the same for your own personal use. However, none of this information is meant to be used for commercial purposes or to be reused on any other website.</p>


<h2 class="bg-primary">What are our IP Rights? </h2>
<p>All the material, content, data, photographs and information contained within this website or any of our other websites is the sole property of AK CLINICS. The same cannot be copied or reproduced anywhere else, for any reason whatsoever, commercial or non-commercial.</p>

	
	<h2 class="bg-primary">What is the law applicable? </h2>
<p>AK Clinics Pvt Ltd is registered at Ludhiana, Punjab, India. For any complaints, arbitration for the website or any other service, the courts of Ludhiana will have exclusive jurisdiction in all manners.</p>

	
		<h2 class="bg-primary">Important Declaration </h2>
<p>The moment you enter this website, your “digital signature” is established, along with an acknowledgement that you are 18 years of age or above and that you agree to all the terms and conditions.</p>

	
	
		<h2 class="bg-primary">Get in touch with Us </h2>
<p>If you have any concerns or queries, please feel free to write to us at i<a href="mailto:info@akclinics.in">info@akclinics.in</a> </p>

	
	


	
</div>
	
	
	
	
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
	<?= view('partials/footer') ?>
