$('.serviceslider').owlCarousel({
  loop: true,
  margin: 0,
  nav: true,
  dots: true,
  autoplay: true,
  autoplayTimeout: 2000,
  autoplayHoverPause: true,
  // center: true,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
      items: 4,
      slideSpeed: 500,
      dots: false,
      autoplay: true,
      loop: true,
      singleItem: true,
      touchDrag: true,
      mouseDrag: true
    },
    600: {
      items: 5,
      slideSpeed: 500,
      dots: false,
      autoplay: true,
      loop: true,
      singleItem: true,
      touchDrag: true,
      mouseDrag: true
    },
    768: {
      items: 5,
      slideSpeed: 500,
      autoplay: true,
      loop: true,
      singleItem: true,
      touchDrag: true,
      mouseDrag: true
    },

    800: {
      items: 8,
      slideSpeed: 500,
      autoplay: false,
      loop: false,
      singleItem: true,
      touchDrag: false,
      mouseDrag: false
    },
    1000: {
      items: 8,
      slideSpeed: 500,
      autoplay: false,
      loop: false,
      singleItem: true,
      touchDrag: false,
      mouseDrag: false
    }
  }
});


$('.beforeafter').owlCarousel({
  loop: true,
  margin: 0,
  nav: true,
  dots: false,
  autoplay: true,
  autoplayTimeout: 2000,
  autoplayHoverPause: true,
  // center: true,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
      dots: false

    },
    600: {
      items: 3,
      dots: false
    },
    1000: {
      items: 4,
      dots: false
    }
  }
});





$(document).ready(function () {

  if ($(window).width() < 991) {
    // If the window width is below 991, hide the footer
    $('.rotatebutton').css('display', 'none');
  } 

  else{
    $('.rotatebutton').css('display', 'none');
  }
  $(window).scroll(function () {

   
    if ($(window).scrollTop() > 0) {
      $('.rotatebutton').fadeIn("fast");
    }
    else {
      $('.rotatebutton').fadeOut("fast");
    }
  })
});

$(document).ready(function () {
  $(window).scroll(function () {
    if ($(window).scrollTop() > 500) {
      $('.footer-sticky').fadeIn("fast");
      $('.footer-sticky').css('bottom', '-0px');
    }
    else {
      $('.footer-sticky').fadeOut("fast");
      $('.footer-sticky').css('bottom', '-0px');
    }

  })
});




$(document).ready(function () {
  $("a:not(.exclude-link)").on("click", function (e) {
    var scrollTopValue = 100;

    // Check window width
    if ($(window).width() < 991) {
      scrollTopValue = 500;
      
    }

    if ($(window).width() < 576) {
      scrollTopValue = 320;

    }

    $('html, body').animate({ scrollTop: scrollTopValue }, 1000);
    return false;
  });
});

let answers = document.querySelectorAll(".innerfaq-container");

answers.forEach((event) => {
  event.addEventListener('click', () => {
    let faqIcon = event.querySelector(".faqclick");
    let answer = event.querySelector(".accordion__answer");

    if (event.classList.contains("active2")) {
      event.classList.remove("active2");
      faqIcon.classList.remove("fa-minus");
      faqIcon.classList.add("fa-plus");
    } else {
      event.classList.add("active2");
      faqIcon.classList.remove("fa-plus");
      faqIcon.classList.add("fa-minus");
    }
  });
});



