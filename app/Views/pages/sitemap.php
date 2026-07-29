<?php
$title = "About Us - AK Clinics Indiranagar Bangalore";
$keywords = "";
$description = "";
$canonical_url = "https://www.akclinics.in/about-us/";
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
	<style>table tr td{padding: 8px;}</style>
 
<style>
  body { font-family: Arial, sans-serif; background: #fff; margin: 0; padding: 0; }
  .container { max-width: 1200px; margin: 0 auto; padding: 40px 20px; }
  h1 { font-size: 28px; margin-bottom: 30px; }
  .sitemap-columns { display: flex; flex-wrap: wrap; gap: 40px; }
  .sitemap-column { flex: 1; min-width: 250px; }
  ul { list-style-type: disc; padding-left: 20px; }
  li { margin-bottom: 8px; }
  a { color: #0073aa; text-decoration: none; }
</style>


  <div class="container">
    <div class="sitemap-columns">

      <div class="sitemap-column">
        <ul>
          <li><a href="/">Home</a></li>
          <li>About
            <ul>
              <li><a href="/about-us/">About Us</a></li>
              <li><a href="/our-doctors/">Our Doctors</a></li>
              <li><a href="/why-ak-clinics/">Why AK Clinics</a></li>
              <li><a href="/awards-accreditation/">Awards</a></li>
            </ul>
          </li>
          <li><a href="/contact-us/">Contact</a></li>
        </ul>
      </div>

      <div class="sitemap-column">
        <ul>
          <li><a href="/hair-transplant/">Hair Transplantation</a></li>
          <li><a href="/fue-hair-transplant/">FUE Hair Transplant</a></li>
          <li><a href="/male-hair-transplant/">Male Hair Transplant</a></li>
          <li><a href="/female-hair-transplant/">Female Hair Transplant</a></li>
          <li><a href="/hairline-reconstruction/">Hairline Reconstruction</a></li>
          <li><a href="/beard-transplant/">Beard Hair Transplant</a></li>
        </ul>
      </div>

      <div class="sitemap-column">
        <ul>
          <li><a href="/hair-transplant-in-raipur/">Hair Transplant in Raipur</a></li>
          <li><a href="/hair-transplant-in-vijayawada/">Hair Transplant in Vijayawada</a></li>
          <li><a href="/hair-transplant-in-ludhiana/">Hair Transplant in Ludhiana</a></li>
          <li><a href="/hair-transplant-in-patna/">Hair Transplant in Patna</a></li>
          <li><a href="/hair-transplant-in-udaipur/">Hair Transplant in Udaipur</a></li>
          <li><a href="/hair-transplant-in-agra/">Hair Transplant in Agra</a></li>
        </ul>
      </div>

    </div>
  </div>
  <?= view('partials/footer') ?>
