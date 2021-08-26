<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>IntellCap</title>

  <!-- Google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <!--header-->
  <?php include 'header.php' ?>
  <!--/header-->
  <section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container py-lg-4 py-md-3">
        <h2 class="title">Contact us</h2>
        <ul class="breadcrumbs-custom-path mt-2 text-center">
          <li><a href="index.php">Home</a></li>
          <li class="mx-2">/ </li>
          <li class="active"> Contact </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- contacts -->
  <section class="w3l-contact-7 py-5" id="contact">
    <div class="contacts-9 py-lg-5 py-md-4">
      <div class="container">
        <h5 class="small">Contact Details</h5>
        <h3 class="title-big mb-4">Our Offices</h3>
        <div class="top-map">
          <div class="row map-content-9">
            <div class="col-lg-6">
              <img src="assets/images/office.jpg" alt="" class="img-fluid radius-image" />
            </div>
            <div class="col-lg-6 cont-details align-self mt-lg-0 mt-md-5 mt-4">
              <address>
                <h5 class="">Head Office</h5>
                <p><span class="fa fa-map-marker"></span> 3 rue Ouhoud,  Appartement 7, Agdal, Rabat, Maroc.</p>
                <p> <a href="mailto:mail@example.com"><span class="fa fa-envelope"></span>admin.corp@intellcap.org</a></p>
                <p><span class="fa fa-phone"></span><a href="tel:+1(12) 366 411 4999"> +212 66 7 32 32 32</a></p>

                <h5 class="mt-4 mb-3">Business Hours</h5>
                <p>Mon-Fri: 9:30 – 16:00</p>
              </address>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //contacts -->
  <!-- home page block1 -->
  <section id="about" class="home-services py-5">
    <div class="container py-lg-3">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="box-wrap">
            <div class="box-wrap-grid">
              <img src="assets/images/call.png" alt="" />
              <div class="info">
                <p>CALL TODAY</p>
                <h4><a href="tel: +12 311 4567">+212 66 7 32 32 32</a></h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt-sm-0 mt-4">
          <div class="box-wrap">
            <div class="box-wrap-grid">
              <img src="assets/images/internet.png" alt="" />
              <div class="info">
                <p>Visit US </p>
                <h4><a href="tel: +12 311 4567">www.intellcap.org</a></h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt-lg-0 mt-4">
          <div class="box-wrap">
            <div class="box-wrap-grid">
              <img src="assets/images/email.png" alt="" />
              <div class="info">
                <p>EMAIL US</p>
                <h4><a href="emailto:info@mail.com">admin.corp@intellcap.org</a></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //home page block1 -->
  <!-- contacts -->
  <section class="w3l-contact-7 py-5">
    <div class="contacts-9 py-lg-5 py-md-4 py-2">
      <div class="container">
        <h5 class="small">Contact team member</h5>
        <h3 class="title-big mb-4">Drop us a line</h3>
        <div class="row map-content-9">
          <div class="col-lg-6">
            <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="text-right">
              <div class="form-grid">
                <input type="text" name="w3lName" id="w3lName" placeholder="Name*" required="">
                <input type="email" name="w3lSender" id="w3lSender" placeholder="Email*" required="">
                <input type="text" name="w3lPhone" id="w3lPhone" placeholder="Phone number*" required="">
                <input type="text" name="w3lSubject" id="w3lSubject" placeholder="Subject">
              </div>
              <textarea name="w3lMessage" id="w3lMessage" placeholder="Message"></textarea>
              <button type="submit" class="btn btn-primary btn-style mt-3">Submit</button>
            </form>
          </div>
          <div class="col-lg-6 map mt-lg-0 mt-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13231.774806024192!2d-6.8489041!3d33.9939798!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8e88f663461b0378!2sIntellcap!5e0!3m2!1sen!2sma!4v1625269743239!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>        </div>
      </div>
    </div>
  </section>
  <!-- footer -->
  <?php include 'footer.php' ?>
  <!-- //footer -->


  <!-- Common jquery plugin -->

  <!-- responsive tabs -->
  <script src="assets/js/jquery-1.9.1.min.js"></script>

  <script src="assets/js/easyResponsiveTabs.js"></script>
  <!--Plug-in Initialisation-->
  <script type="text/javascript">
    $(document).ready(function() {
      //Horizontal Tab
      $('#parentHorizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true, // 100% fit in a container
        tabidentify: 'hor_1', // The tab groups identifier
        activate: function(event) { // Callback function if tab is switched
          var $tab = $(this);
          var $info = $('#nested-tabInfo');
          var $name = $('span', $info);
          $name.text($tab.text());
          $info.show();
        }
      });
    });
  </script>

  <script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });

      $('.popup-with-move-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
      });
    });
  </script>


  <script src="assets/js/particles.js"></script>

  <script>
    particlesJS("particles-js", {
      "particles": {
        "number": {
          "value": 80,
          "density": {
            "enable": true,
            "value_area": 800
          }
        },
        "color": {
          "value": "#ffffff"
        },
        "shape": {
          "type": "circle",
          "stroke": {
            "width": 0,
            "color": "#000000"
          },
          "polygon": {
            "nb_sides": 5
          }
        },
        "opacity": {
          "value": 0.5,
          "random": false,
          "anim": {
            "enable": false,
            "speed": 1,
            "opacity_min": 0.1,
            "sync": false
          }
        },
        "size": {
          "value": 3,
          "random": true,
          "anim": {
            "enable": false,
            "speed": 40,
            "size_min": 0.1,
            "sync": false
          }
        },
        "line_linked": {
          "enable": true,
          "distance": 150,
          "color": "#ffffff",
          "opacity": 0.4,
          "width": 1
        },
        "move": {
          "enable": true,
          "speed": 6,
          "direction": "none",
          "random": true,
          "straight": false,
          "out_mode": "out",
          "bounce": false,
          "attract": {
            "enable": false,
            "rotateX": 600,
            "rotateY": 1200
          }
        }
      },
      "interactivity": {
        "detect_on": "canvas",
        "events": {
          "onhover": {
            "enable": true,
            "mode": "grab"
          },
          "onclick": {
            "enable": true,
            "mode": "push"
          },
          "resize": true
        },
        "modes": {
          "grab": {
            "distance": 140,
            "line_linked": {
              "opacity": 1
            }
          },
          "bubble": {
            "distance": 400,
            "size": 40,
            "duration": 2,
            "opacity": 8,
            "speed": 3
          },
          "repulse": {
            "distance": 200,
            "duration": 0.4
          },
          "push": {
            "particles_nb": 4
          },
          "remove": {
            "particles_nb": 2
          }
        }
      },
      "retina_detect": true
    });
  </script>
  <script src="assets/js/owl.carousel.js"></script><!-- owl carousel -->

  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function() {
      $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: false,
            loop: false
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function() {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function() {
      $('.navbar-toggler').click(function() {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- //disable body scroll which navbar is in active -->

  <!--bootstrap-->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- //bootstrap-->


</body>

</html>