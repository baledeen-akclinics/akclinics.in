<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
 $title = "Hair Transplant Clinic in Bangalore | Top Hair Transplant Surgeon | AK Clinics";
$keywords = "hair transplant surgeon in bangalore, best clinic for hair transplant, top hair transplant surgeon in bangalore ";
$description = "Dr.Kapil Dua is a leading hair transplant surgeon in Bangalore for all of your hair related problems. Book Your Appointment Now!";
$canonical_url = "https://www.akclinics.in/";
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
    <section id="hero-1" class="bg-fixed hero-section ls-is-cached lazyloaded">
    
    
    </section>
    <!--section id="banner-2" class="banner-section division book-hide-tab">
              
  </section-->
    <section id="about-1" class="about-section division">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div id="abox-1" class="col-md-6 col-lg-3">
            <div class="abox-1 white-color"> <span class="h5-md mh5">Working Time</span>
              <table class="table white-color" style="margin-top:25px;">
                <tbody>
                  <tr>
                    <td>Monday</td>
                    <td> - </td>
                    <td class="text-right">Saturday</td>
                  </tr>
                  <tr style="border-bottom:1px solid #e5e5e5;">
                    <td>10:00 AM</td>
                    <td> - </td>
                    <td class="text-right">06:30 PM</td>
                  </tr>
                  <tr>
                    <td>Sunday</td>
                    <td></td>
                    <td class="text-right"></td>
                  </tr>
                  <tr class="last-tr">
                    <td>10:00 AM</td>
                    <td> - </td>
                    <td class="text-right">06:30 PM</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div id="abox-2" class="col-md-6 col-lg-3">
            <div class="abox-1 white-color"> <span class="h5-md mh5">Quality Hair Transplant</span>
              <p style="margin-top:10px;">The Difference between a hair transplant & quality hair transplant is what you
                get to see when you visit AK Clinics and get your procedure done by trained hands.</p>
              <a href="https://www.akclinics.in/hair-transplant-in-bangalore/"
                class="btn btn-sm btn-tra-white mt-25">View</a>
            </div>
          </div>
          <div id="abox-3" class="col-md-6 col-lg-3">
            <div class="abox-1 white-color"> <span class="h5-md mh5">Affordable Cost</span>
              <p style="margin-top:10px;">Just because we offer you premium hair transplant services, does not mean that
                you need to break the bank – we consider affordability high priority. </p>
              <a href="https://www.akclinics.in/hair-transplant-in-bangalore/"
                class="btn btn-sm btn-tra-white mt-25">View</a>
            </div>
          </div>
          <div id="abox-4" class="col-md-6 col-lg-3">
            <div class="abox-1 white-color"> <span class="h5-md mh5">Great Result Since 2007</span>
              <p style="margin-top:10px;">Ever since we opened our doors to the public in the year 2007, we have been
                striving to offer great results and continue to do so. </p>
              <a href="https://www.akclinics.in/before-after-results/" class="btn btn-sm btn-tra-white mt-25">View</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="services-3" class="bg-lightgrey wide-100 services-section division">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1 section-title">
            <h1 class="h3-md steelblue-color mobile-font-heading">India’s Best Hair Transplant Clinic – Affordable, Safe, & Expert Services</h1>
            <p class="text-center"
              style="font-weight:normal; font-size:14px; color:#888888; font-family:open sans;padding: 0 10%;">Looking for the best hair transplant clinic in India? Discover expert surgeons, world-class facilities, and affordable hair restoration treatments tailored to your needs. We offer a range of personalized  & advanced hair transplant treatments for both men and women. With 100+ years of collective hands-on experience in performing surgeries, our highly qualified team of in-house surgeons have mastered the art of hair transplant in blending science and aesthetics judgment to designing natural hair lines and delivering safe and permanent results. </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel owl-theme services-holder">
              <div class="sbox-3 icon-sm"> <a href="https://www.akclinics.in/fue-hair-transplant-in-bangalore/">
                  <div class="sbox-3-icon"> <img data-src="<?= base_url() ?>images/bio-fue-hair-transplant.webp"
                      alt="FUE Hair Transplant in Bangalore" class="lazyload"> </div>
                  <h5 class="h5-xs steelblue-color">Bio-FUE Hair Transplant </h5>
                  <p>A procedure that has been developed in-house, this procedure brings the best of a follicular unit
                    extraction and platelet-rich plasma therapy, ensuring better hair restoration. </p>
                </a> </div>
              <div class="sbox-3 icon-sm"> <a href="https://www.akclinics.in/fut-hair-transplant-in-bangalore/">
                  <div class="sbox-3-icon"> <img data-src="<?= base_url() ?>images/fut-hair-transplant.webp"
                      alt="FUT Hair Transplant in Bangalore" class="lazyload"> </div>
                  <h5 class="h5-xs steelblue-color">FUT Hair Transplant </h5>
                  <p>The age old method has been perfected with new improvements and additions at AK Clinics and we can
                    complete the procedure with minimal scarring. </p>
                </a> </div>
              <div class="sbox-3 icon-sm"> <a href="https://www.akclinics.in/beard-transplant-in-bangalore/">
                  <div class="sbox-3-icon"> <img data-src="<?= base_url() ?>images/beard-hair-transplant.webp"
                      alt="Beard Transplant in Bangalore" class="lazyload"> </div>
                  <h5 class="h5-xs steelblue-color">Beard Transplant </h5>
                  <p>If you want a lush, thick beard, we are the people to come to, because we can ensure that you have
                    the beard of your dreams. Consult with city's best surgeon now!</p>
                </a> </div>
              <div class="sbox-3 icon-sm"> <a href="https://www.akclinics.in/revision-hair-transplant-in-bangalore/">
                  <div class="sbox-3-icon"> <img data-src="<?= base_url() ?>images/revision-hair-transplant.webp"
                      alt="Hairline Correction Surgery in Bangalore" class="lazyload"> </div>
                  <h5 class="h5-xs steelblue-color">Revision Hair Transplant </h5>
                  <p>What do you do if your first transplant is not satisfactory enough? Simple – you come into AK
                    Clinics and with our revision hair transplant procedures, we will give you the hair you want. </p>
                </a> </div>
              <div class="sbox-3 icon-sm"> <a href="https://www.akclinics.in/prp-treatment-for-hair-in-bangalore/">
                  <div class="sbox-3-icon"> <img data-src="<?= base_url() ?>images/prp-treatment.webp"
                      alt="PRP for Hair Treatment in Bangalore" class="lazyload"> </div>
                  <h5 class="h5-xs steelblue-color">PRP Hair Treatment </h5>
                  <p>A hair transplant is not always the way to go; sometimes, all you need is our platelet-rich plasma
                    therapy and you could have the hair you dream of! </p>
                </a> </div>
              <div class="sbox-3 icon-sm"> <a href="https://www.akclinics.in/hair-loss-treatment-in-bangalore/">
                  <div class="sbox-3-icon"> <img data-src="<?= base_url() ?>images/hair-loss-treatment.webp"
                      alt="Hair Loss Treatment in Bangalore" class="lazyload"> </div>
                  <h5 class="h5-xs steelblue-color">Hair Loss Treatment </h5>
                  <p>We also offer a wide range of non-invasive hair loss treatment procedures including laser therapy,
                    scalp micropigmentation and mesotherapy. </p>
                </a> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="pt-100 about-section division">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-6">
            <div class="about-img text-center wow fadeInUp" data-wow-delay="0.6s"> <img class="img-fluid lazyload"
                data-src="/images/team-1.webp" alt="Experienced Hair Transplant Surgeon in Bangalore"> </div>
          </div>
          <div class="col-lg-6">
            <div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">
              <h2 class="section-id blue-color" style="font-size:26px; margin-top:10px;">Personalized Hair Transplant Treatments at AK Clinics</h2>
              <p class="home_page_p_font">
                AK Clinics is India’s leading hair transplant clinic recognized for delivering world class hair loss treatments. Established in 2007 by Dr. Kapil Dua- One of the pioneers of hair transplant in India, AK Clinics built trust among people in solving their hair loss problems over years and expanded its branches in Delhi, Bangalore and Gurugram. Today, we have a team of highly qualified and skilled in-house team of doctors & technicians in each branch helping people across India to look and feel their best.  With the mission to provide every Indian with premium hair treatments at affordable rates, AK Clinics take pride in standing for trust, reliability, transparency and delivery best results for its patients since 2007.</p>
                  <ul class="content-list">
                  <li>18 Years of expertise in hair restoration</li>
                  <li>Recommended by celebrities</li>
                  <li>State of the art clinics across India</li>
                  <li>Advance machines & tools</li>
                  <li>Cutting edge technologies</li>
                  <li>Natural-Looking results</li>
                  <li>100% Transparency</li>
                </ul>
             
            </div>
          </div>
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.4s">
            <div class="mt-20">
              <p class="home_page_p_font">
              <p class="home_page_p_font"> <strong>Scalp Hair Transplant: </strong>This is the most common hair transplant method for those experiencing baldness. In this procedure, hair roots are taken from the donor area from back and sides of head and transplanted to the bald spots. The transplanted hair will stay permanent and won’t fall out, giving you a dense, natural-looking head of hair.</p>
              <p class="home_page_p_font">
                <strong>Body Hair Transplant: </a></strong>Do not have enough hair in your donor area? We customize your procedure and transplant the hair from other parts of the body like the beard, chest, back, armpit and even pubic area. So, do not worry, we’re here to help!
              </p>
              <p class="home_page_p_font">
                <strong>Long Hair Transplant: </strong> Want a hair transplant without shaving your head, especially women? A long hair transplant lets you keep your natural length while transplanting your hair from donor to receipt area.</p>
              <p class="home_page_p_font"><strong>Revision Hair Transplant: </strong>Dissatisfied with previous hair transplant results? Our revision hair transplant helps you to correct your failed hair transplant, improve, and perfect your hairline & hair density.</p>
              <p class="home_page_p_font"><strong>Beard & Moustache Hair Transplant: </strong>Patchy beard is affecting your confidence? Our beard & moustache hair transplant treatment helps you to achieve a dense and well groomed beard & moustache that you always desired for and complements your facial features.</p>
              <p class="home_page_p_font"><strong>Eyebrow Hair Transplant: </strong>Tired of using pencils to fill out your overplucked eyebrows? We understand most of the people are unsatisfied with their eyebrow density and shape.  Eye brow hair transplant helps you to get permanent hair density and even more defined eyebrow shape that make your facial features even more attractive.</p>

            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="faqs-page" class="wide-20 faqs-section division">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="questions-holder">
              <h3 class="h3-md bg-primary" style="margin-top: 9px;">Frequently Asked Questions</h3>
              <div id="accordion" role="tablist">
                <div class="card">
                  <div class="card-header" role="tab" id="headingOne">
                    <h2 class="h5-xs main-page-faq-heading"> <a data-toggle="collapse" href="#collapseOne" role="button"
                        aria-expanded="false" aria-controls="collapseOne" class="collapsed">Who is a suitable candidate for a hair transplant?</a> </h2>
                  </div>
                  <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne"
                    data-parent="#accordion" style="">
                    <div class="card-body">
                      <p>Hair transplant surgery is suitable for individuals who:</p>
                <ul class="content-list">
                <li>Are experiencing male or female pattern baldness.</li>
                <li>Have sufficient donor hair (usually from the back or sides of the scalp).</li>
                <li>Are in overall good health.</li>
                <li>Have realistic expectations about the outcome of the surgery.</li>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" role="tab" id="headingTwo">
                    <h2 class="h5-xs main-page-faq-heading"> <a class="collapsed" data-toggle="collapse"
                        href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">How does a hair transplant work?</a> </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo"
                    data-parent="#accordion" style="">
                    <div class="card-body">
                      <p>In hair transplantation, hair roots (grafts) are extracted from the safe donor area and then transplanted into the receipt area where hair has fallen out! These transplanted grafts take their roots into a new place in the coming few months and do not fall out again.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" role="tab" id="headingThree">
                    <h2 class="h5-xs main-page-faq-heading"> <a class="collapsed" data-toggle="collapse"
                        href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Is the procedure painful?</a> </h2>
                  </div>
                  <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree"
                    data-parent="#accordion">
                    <div class="card-body">
                      <p>Hair transplant is a virtually painless procedure. Use of numbing gel, local anaesthesia and vibrator numbs the sensation in the transplant area and as a result nerves do not signal the pain to the brain and patients just feel minimal pain. </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" role="tab" id="headingFour">
                    <h2 class="h5-xs main-page-faq-heading"> <a class="collapsed" data-toggle="collapse"
                        href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">How long does the procedure take?</a> </h2>
                  </div>
                  <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour"
                    data-parent="#accordion">
                    <div class="card-body">
                      <p>The duration of the procedure depends on the extent of hair loss and the number of follicles being transplanted. Typically, a hair transplant procedure can take anywhere from 4 to 8 hours. Larger areas may require more than one session.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" role="tab" id="headingFour1">
                    <h2 class="h5-xs main-page-faq-heading"> <a class="collapsed" data-toggle="collapse"
                        href="#collapseFour1" role="button" aria-expanded="false" aria-controls="collapseFour"> Why
                        Choose Board-Certified Doctors for Hair Transplant? </a> </h2>
                  </div>
                  <div id="collapseFour1" class="collapse" role="tabpanel" aria-labelledby="headingFour"
                    data-parent="#accordion">
                    <div class="card-body">
                      <p>When you choose to get your hair transplant done by a board certified surgeon, you are getting
                        the guarantee that your procedure is being done by someone who is properly qualified and
                        trained. Moreover, being certified by the board is an assurance that this surgeon has been
                        approved and licensed. </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" role="tab" id="headingSix">
                    <h2 class="h5-xs main-page-faq-heading"> <a class="collapsed" data-toggle="collapse"
                        href="#collapseSix" role="button" aria-expanded="false" aria-controls="collapseSix">When do I
                        need to visit a dermatologist or trichologist?</a> </h2>
                  </div>
                  <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix"
                    data-parent="#accordion">
                    <div class="card-body">
                      <p>Losing a few hair every day is normal, but when you start losing hair in clumps or start
                        noticing a receding hair line or bald spots, it might be time to meet an expert. Same goes for
                        meeting a dermatologist – if you start seeing any patches or rashes on the body that refuse to
                        go away, you might want to meet an expert. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
          </div>
          <aside id="sidebar" class="col-lg-4">
            <div id="txt-widget" class="sidebar-div mb-50">
              <h3 class="h5-sm steelblue-color"><a href="#">Top Hair Transplant Surgeon </a></h3>
              <div class="txt-widget-unit mb-15 clearfix d-flex align-items-center">
                <div class="txt-widget-avatar"> <img class="lazyload" data-src="/images/drkapil.webp"
                    alt="Hair Transplant Surgeon in Bangalore"> </div>
                <div class="txt-widget-data">
                  <h5 class="h5-md steelblue-color">Dr. Kapil Dua</h5>
                  <span> Chairman & Chief Hair Transplant Surgeon</span>
                  <p class="blue-color">+91 97791 62190</p>
                </div>
              </div>
              <p class="p-sm">Dr. Kapil Dua provides more than just the best hair transplant near you – he instills a
                renewed sense of confidence in you! </p>
              <a href="/book-appointment/" class="btn btn-blue blue-hover">Consult Now!</a>
            </div>
            <div class="sidebar-timetable sidebar-div mb-50">
              <h5 class="h5-md mb-20">Need Help?</h5>
              <p class="p-sm"> Suffering from active hair loss or baldness? Book your appointment now and consult with
                India's leading hair transplant surgeon in Bangalore for best advice. </p>
              <a href="tel: 9779162190" class="btn btn-blue blue-hover mt-10"
                style="text-align: center;display: block;"><i class="fa fa-phone"></i> +91 97791 62190</a>
            </div>
          </aside>
        </div>
      </div>
    </section>
    <section id="info-2" class="wide-60 info-section division">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-6">
            <div class="txt-block pc-30 mb-40 wow fadeInUp" data-wow-delay="0.4s">
              <h3 class="h3-md steelblue-color">Innovative Approach for Better Results</h3>
              <p class="home_page_p_font"> At AK Clinics, we are not about filling our coffers – our aim remains to
                offer the best possible services at an affordable cost and ensure that every client that walks into our
                clinics, walks out with the results they have desired. Moreover, we understand our responsibility and
                duty towards forwarding the science of hair transplant, which is why we are constantly looking for new
                and innovative approaches for better results. We have been providing consistently <a href="#"
                  class="orange-link">great results since 2007</a> and strive to continue doing so in the days to come
                as well. </p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="info-2-img wow fadeInUp" data-wow-delay="0.6s">
              <img class="img-fluid lazyload" data-src="/images/results.webp"
                alt="Best Hair Transplant Results in Bangalore">
            </div>
          </div>
        </div>
      </div>
    </section>
    <?= view('partials/testimonials') ?>
    <section id="banner-7" class="bg-fixed banner-section division">
      <div class="container white-color">
        <div class="row d-flex align-items-center">
          <div class="col-md-8 col-lg-5 col-xl-4">
            <div class="banner-txt wow fadeInUp" data-wow-delay="0.4s">
              <h3 class="h2-xs hair-transplant-index-heading" style="font-size:2.90rem; color:#333;">State of the art
                Clinic</h3>
              <p class="text-justify" style="color:#000;">Leave your hair woes behind at a state of the art hair
                restoration clinic that stands at par with international counterparts! From Bio FUE (a trademarked
                procedure developed in-house) to other modern methods such as PRP and mesotherapy, there are plenty of
                hair restoration procedure on offer here. Walk into AK Clinics and get the hair that you have always
                wanted along with a new sense of confidence in yourself!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="blog-1" class="wide-60 blog-section division">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 offset-lg-0 section-title">
            <h3 class="h3-md steelblue-color">Gallery</h3>
            <p class="text-center" style="font-weight:bold;">Listen to what our experts have to say on hair transplant
              procedures</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="blog-post wow fadeInUp h-100" data-wow-delay="0.3s">
              <div class="blog-post-img"> <a href="https://www.youtube.com/watch?v=zebLxI08y9Y&amp;feature=emb_title">
                  <img data-src="/images/youtube-thumb-1.webp" data-src="/images/youtube-thumb-1.webp" height="196"
                    alt="Hairline Re-construction Surgery" class="lazyload" /> </a> </div>
              <div class="blog-post-txt">
                <h5 class="h5-sm steelblue-color"><a
                    href="https://www.youtube.com/watch?v=zebLxI08y9Y&amp;feature=emb_title">Hairline Re-construction
                    Surgery</a></h5>
                <p> Having genuine knowledge about hairline anatomy before correcting it is extremely important.
                  Specialist Dr Kapil Dua here explaining the case of a patient who had already undergone a hair
                  transplant somewhere and wasn’t pleased with his hairline height. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="blog-post wow fadeInUp h-100" data-wow-delay="0.4s">
              <div class="blog-post-img"> <a href="https://www.youtube.com/watch?v=QEPsDDd_cc4&amp;feature=emb_title">
                  <img data-src="/images/youtube-thumb-2.webp" data-src="/images/youtube-thumb-2.webp" height="196"
                    alt="Celebrity Hair Transplant" class="lazyload"> </a> </div>
              <div class="blog-post-txt">
                <h5 class="h5-sm steelblue-color"><a
                    href="https://www.youtube.com/watch?v=QEPsDDd_cc4&amp;feature=emb_title">
                    Celebrity Hair Transplant</a></h5>
                <p>Here is the hair transplant surgery video of Master Saleem, a most famous Punjabi singer who is known
                  for its Sufi singing. He underwent revision Hair Transplant at AK Clinics and the surgery was
                  performed by Dr Kapil Dua. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="blog-post wow fadeInUp h-100" data-wow-delay="0.5s">
              <div class="blog-post-img"> <a href="https://www.youtube.com/watch?v=uVXfe3CNvQQ&amp;feature=emb_title">
                  <img data-src="/images/youtube-thumb-3.webp" data-src="/images/youtube-thumb-3.webp" height="196"
                    alt="All About Hair Transplant" class="lazyload"></a> </div>
              <div class="blog-post-txt">
                <h5 class="h5-sm steelblue-color"><a
                    href="https://www.youtube.com/watch?v=uVXfe3CNvQQ&amp;feature=emb_title">All About Hair
                    Transplant</a></h5>
                <p> Dr. Kapil Dua, India's best hair transplant surgeon in conversation with The Summer News about
                  everything related to Hair Transplant, the myths of hair-loss and answering some of the most asked
                  questions.</p>
              </div>
            </div>
          </div>
          <div class="col-md-12 text-center mt-30">
            <div class="all-doctors mb-20"> <a href="/video-gallery/" class="btn btn-blue blue-hover">Video Gallery</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div id="statistic-1" class="statistic-section">
      <div class="container white-color">
        <div class="row">
          <div class="col-md-6 col-lg-3 col-xs-6 col-6">
            <div class="statistic-block icon-lg"> <span class="flaticon-062-cardiogram-3"></span>
              <h5 class="statistic-number"><span class="count-element">2000</span> +</h5>
              <p class="txt-400 text-center">Happy Patients</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 col-xs-6 col-6">
            <div class="statistic-block icon-lg"> <span class="flaticon-137-doctor"></span>
              <h5 class="statistic-number"><span class="count-elemenNt">10 Million</span></h5>
              <p class="txt-400 text-center">Grafts transplanted</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 col-xs-6 col-6">
            <div class="statistic-block icon-lg"> <span class="flaticon-065-hospital-bed"></span>
              <h5 class="statistic-number"><span class="count-elemeNnt">5% or Less</span></h5>
              <p class="txt-400 text-center">Controlled FTR</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 col-xs-6 col-6">
            <div class="statistic-block icon-lg"> <span class="flaticon-040-placeholder"></span>
              <h5 class="statistic-number"><span class="count-elemeVnt">18-75</span> +</h5>
              <p class="txt-400 text-center">Age Group</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section id="banner-2" class="banner-section division m-hide">
      <div class="bg-scroll bg-inner bg-image division" style="background-attachment:inherit !important;">
        <div class="container white-color">
          <div class="row d-flex align-items-center">
            <div class="col-lg-6"> </div>
            <div class="col-lg-5 offset-lg-1">
              <div class="banner-txt pc-30 wow fadeInUp" data-wow-delay="0.4s">
                <?= view('partials/book_appointment') ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="m-hide">
      <div style="height: 55px;
    width: 55px;
    background-color: #2384b5;
    color: #fff;
    position: fixed;
    bottom: 26px;
    border-radius: 45px;
    left: 21px;
    z-index: 1050;" class="shake"><a href="tel:9779162190" style="color:#fff; text-decoration:none;font-size: 30px;"><i
            class="fa fa-phone" style="font-size:30px;padding: 12px 16px;"></i></a></div>
      <div class="m_whatsapp" style="height: 55px;
    width: 55px;
    background-color: #01e675;
    color: #fff;
    position: fixed;
    bottom: 26px;
    border-radius: 45px;
    left: 91px;
    box-shadow: 0 1px 12px #000;
    z-index: 1050;
    display: block;"><a data-action="open" data-phone="919779162190" data-message="Hi."
          href="https://wa.me/919779162190" target="_blank" style="color:#fff; text-decoration:none;"><i
            class="fa fa-whatsapp" style="font-size:40px;padding: 9px 11px;"></i></a></div>
    </div>
  </div>
  <div class="row book-hide" style="min-height:40px; background-color:#fff; position: fixed ;bottom:0;
    z-index: 1050; width:105%; padding: 5px 0 5px 0;box-shadow: 0 4px 12px #e5e5e5;">
    <div class="col-md-10 offset-1">
      <ul class="list-inline">
        <li class="list-inline-item text-center mr-4"> <a href="mailto:info@akclinics.com" class="ico-facebook"><i
              class="fab fa fa-envelope-o mb-0 fa-1x" style="color:#333333; font-size:15px;"></i><br>
            Email Us</a> </li>
        <li class="list-inline-item text-center ml-auto mr-4"> <a href="tel:9779162190" class="ico-facebook "><i
              class="fab fa fa-phone mb-0 fa-1x" style="color: #eb2866; font-size: 17px;"></i><br>
            Call Us</a> </li>
        <li class="list-inline-item text-center ml-auto mr-4"> <a data-action="open" data-phone="919779162190"
            data-message="Hi." href="https://wa.me/919779162190" target="_blank" class=""><i class="fa fa-whatsapp mb-0"
              style="font-size:19px; color:green;"></i> <br>
            Whatsapp</a> </li>
        <li class="list-inline-item text-center ml-auto"> <a href="/book-appointment/" class="ico-facebook"><i
              class="fab fa fa-calendar mb-0 fa-1x" style="color:#5bb0cf; font-size: 15px;"></i><br>
            Appointment</a> </li>
      </ul>
    </div>
  </div>
  <?= view('partials/footer') ?>
