<?php
$title = "Hair Transplant Videos | Video Gellary | AK Clinics ";
$keywords = "hair transplant video, fue hair transplant surgery video, video gellary";
$description = "";
$canonical_url = "https://www.akclinics.in/video-gallery/";
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



</div>

<div id="service-page" class="wide-60 service-page-section division">
<div class="container">
<div class="row">

<div class="col-lg-12">
<h1 class="section-id blue-color">Video Gallery</h1>
</div>
<div class="col-lg-8">
<div class="row">
<div class="col-md-6 col-lg-6">
<div class="doctor-2">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item img-fluid" src="https://www.youtube.com/embed/OcASaD9-jZ0" allowfullscreen="" loading="lazy"></iframe>
</div>

<div class="doctor-meta">
<h5 class="h5-xs blue-color">Sheru Aangrish Hair Transplant Experience at AK Clinics</h5>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6">
<div class="doctor-2">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item img-fluid" src="https://www.youtube.com/embed/MfreK_3WfCI" allowfullscreen="" loading="lazy"></iframe>
</div>

<div class="doctor-meta">
<h5 class="h5-xs blue-color">Hair Loss Treatments | When to expect visible results?</h5>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6">
<div class="doctor-2">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item img-fluid" src="https://www.youtube.com/embed/uVXfe3CNvQQ" allowfullscreen="" loading="lazy"></iframe>
</div>

<div class="doctor-meta">
<h5 class="h5-xs blue-color">Dr. Kapil Dua Interview with The Summer News</h5>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6">
<div class="doctor-2">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item img-fluid" src="https://www.youtube.com/embed/zebLxI08y9Y" allowfullscreen="" loading="lazy"></iframe>
</div>

<div class="doctor-meta">
<h5 class="h5-xs blue-color">Hairline Correction in Patient | Hairline reconstruction surgery</h5>
</div>
</div>
</div>

<div class="col-md-6 col-lg-6">
<div class="doctor-2">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item img-fluid" src="https://www.youtube.com/embed/TvuzJpR9DfM" allowfullscreen="" loading="lazy"></iframe>
</div>

<div class="doctor-meta">
<h5 class="h5-xs blue-color">How to Remove Scabs after Hair Transplant at Home</h5>
</div>
</div>
</div>

<div class="col-md-6 col-lg-6">
<div class="doctor-2">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item img-fluid" src="https://www.youtube.com/embed/HslV9QMAuKk" allowfullscreen="" loading="lazy"></iframe>
</div>

<div class="doctor-meta">
<h5 class="h5-xs blue-color">Hair Transplant in Summers - Is it the right time ?</h5>
</div>
</div>
</div>

<div class="col-md-6 col-lg-6">
<div class="doctor-2">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item img-fluid" src="https://www.youtube.com/embed/QEPsDDd_cc4" allowfullscreen="" loading="lazy"></iframe>
</div>

<div class="doctor-meta">
<h5 class="h5-xs blue-color">Master Saleem Hair Transplant | Celebrity hair transplant</h5>
</div>
</div>
</div>





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
