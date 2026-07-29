<?php
$title = "Book Appointment - AK Clinics Indiranagar Bangalore";
$keywords = "";
$description = "";
$canonical_url = "https://www.akclinics.in/book-appointment/";
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


<div id="service-page" class="wide-60 service-page-section division">
<div class="container">
<div class="row justify-content-md-center">

<div class="col-lg-6">
<?php
//book appointment form
echo view('partials/book_appointment');
?>
	
</div> 


</div> 
</div> 
</div> 
 <?php
  // testimonials
  echo view('partials/testimonials');
  ?>


		<?= view('partials/footer') ?>
