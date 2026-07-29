<?= $this->extend('layouts/app') ?>

<?= $this->section('title') ?>Book Appointment - AK Clinics Indiranagar Bangalore<?= $this->endSection() ?>
<?= $this->section('keywords') ?><?= $this->endSection() ?>
<?= $this->section('description') ?><?= $this->endSection() ?>
<?= $this->section('canonical') ?>https://www.akclinics.in/book-appointment/<?= $this->endSection() ?>

<?= $this->section('content') ?>
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
<?= $this->endSection() ?>
