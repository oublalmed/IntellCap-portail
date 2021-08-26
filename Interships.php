<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
<?php include 'connexion.php' ?>

<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-4 py-md-3">
            <h2 class="title">Jobs & interships</h2>
            <ul class="breadcrumbs-custom-path mt-2 text-center">
                <li><a href="index.php">Home</a></li>
                <li class="mx-2">/ </li>
                <li class="active"> Jobs & interships </li>
            </ul>
        </div>
    </div>
</section>
<br>
<section class="w3-about-2" id="choose">
    <div class="w3-services-ab py-5">
      <div class="container py-lg-5 py-md-4">
        <h5 class="small text-light text-center">Jobs</h5>
        <h3 class="title-big mb-5 text-center">apply for your job</h3>
        <div class="w3-services-grids">
          <div class=" w3-services-right-grid pl-lg-5 mx-auto">
            <div class="fea-gd-vv row">
              <?php
                  $getJobs= mysqli_query($con,"SELECT * from jobs");
                  while ($resE =mysqli_fetch_assoc($getJobs)) {
                ?> 
              <div class="col-lg-4 col-md-6">               
                <div class="float-lt feature-gd">
                  <div class="icon-info">
                    <style> a:hover {color: red;}</style>
                    <h4 class="title-meduim mb-4 mt-2" ><span><a href="jobs.php"> <?php echo $resE['jobName']; ?> </a></span></h4>
                    <p> <?php echo substr($resE['descJob'],0,80); ?> </p><br>
                    <p  style="color:red;"><b>Date limite : <?php echo $resE['dateLimite']; ?> </b></p>
                  </div>
                </div>
              </div>
              <?php  } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br>
  <section class="w3-about-2" id="choose">
    <div class="w3-services-ab py-5">
      <div class="container py-lg-5 py-md-4">
        <h5 class="small text-light text-center">Interships</h5>
        <h3 class="title-big mb-5 text-center">apply for your intership</h3>
        <div class="w3-services-grids">
          <div class=" w3-services-right-grid pl-lg-5 mx-auto">
            <div class="fea-gd-vv row">
              <?php
                  $getInterships= mysqli_query($con,"SELECT * from interships");
                  while ($resE =mysqli_fetch_assoc($getInterships)) {
              ?>             
              <div class="col-lg-4 col-md-6">
                <div class="float-lt feature-gd">
                  <div class="icon-info">
                    <style> a:hover {color: red;}</style>
                    <h4 class="title-meduim mb-4 mt-2" ><span><a href=""> <?php echo $resE['postIntership']; ?> </a></span></h4>
                    <p> <?php echo substr($resE['descIntership'],0,80); ?> </p><br>
                    <p  style="color:red;"><b>Duration : <?php echo $resE['duree']; ?> </b></p>
                  </div>
                </div>
              </div>
              <?php  } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<br><br>
<!-- footer -->
<?php include 'footer.php' ?>
<!-- //footer -->

<!-- responsive tabs -->
<script src="assets/js/jquery-1.9.1.min.js"></script>
<script src="assets/js/easyResponsiveTabs.js"></script>

<!--Plug-in Initialisation-->
<script type="text/javascript">
  $(document).ready(function () {
    //Horizontal Tab
    $('#parentHorizontalTab').easyResponsiveTabs({
      type: 'default', //Types: default, vertical, accordion
      width: 'auto', //auto or any width like 600px
      fit: true, // 100% fit in a container
      tabidentify: 'hor_1', // The tab groups identifier
      activate: function (event) { // Callback function if tab is switched
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
  $(document).ready(function () {
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
  $(document).ready(function () {
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
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
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
