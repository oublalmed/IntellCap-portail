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
  <section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container py-lg-4 py-md-3">
        <h2 class="title">Jobs & interships</h2>
        <ul class="breadcrumbs-custom-path mt-2 text-center">
          <li><a href="index.html">Home</a></li>
          <li class="mx-2">/ </li>
          <li class="active"> Jobs & interships </li>
        </ul>
      </div>
    </div>
  </section>

  <br><br>
  <!-- jobs -->
  <section class="search-banner text-white  form-arka-plan">
    <div class="container">
      <div class="row">
        <!-- Contact Us Thumb -->
        <!-- Contact Form -->
        <div class="col-5 col-lg-5" align="center">
          <div class="contact_from_area  clearfix">
            <!-- Contact Heading -->
            <div class="contact-heading">
              <h4 style=" color: black;"><b>Consultant web</b></h4>
              <hr><br>
            </div>
            <div class="contact_form">
              <div class="row">
                <!-- Form Group -->
                <div class="col-12 col-lg-12">
                  <div class="form-group">
                    <p align="justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <br>
                    <p style="color:red;"><b>Date limite : 2021-08-18 </b></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-5 col-lg-5" align="center">
          <div class="contact_from_area  clearfix">
            <!-- Contact Heading -->
            <div class="contact-heading">
              <h4 style=" color: black;"><b>Apply for it </b></h4>
              <hr><br>
            </div>
            <?php

            if (isset($_POST['ApplyBtn'])) {

              $nom = $_POST['NomUser'];
              $prenom = $_POST['PrenomUser'];
              $email = $_POST['EmailUser'];
              $dateNaiss = $_POST['dateNaiss'];
              $adresse = $_POST['AdressUser'];
              $ville = $_POST['VilleUser'];
              $codePostal = $_POST['CodePUser'];
              $tel = $_POST['TelUser'];
              $niveau = $_POST['dateD'];
              $poste = $_POST['dateD'];
              $cv = $_POST['chemin'];
              $motivation = $_POST['motivation'];
              $insertIntoRes = mysqli_query($con, "INSERT into candidatures values('','" . $dateDemande . "','" . $needs . "','" . $idService . "','" . $idUser . "') ");

              echo "<script>alert('Thank you for your candidature . Welcome !');</script>";
            }

            ?>
            <div class="contact_form">
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="contact_input_area">
                  <div class="row">
                    <!-- Form Group -->
                    <div class="col-12 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control mb-30" name="NomUser" placeholder="Votre Nom" required>
                      </div>
                    </div>
                    <!-- Form Group -->
                    <div class="col-12 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control mb-30" name="PrenomUser" placeholder="Votre Prénom " required>
                      </div>
                    </div>
                    <!-- Form Group -->
                    <div class="col-12 col-lg-12">
                      <div class="form-group">
                        <input type="email" class="form-control mb-30" name="EmailUser" placeholder="adresse email" required>
                      </div>
                    </div>
                    <!-- Form Group -->
                    <!-- Form Group -->
                    <div class="col-12 col-lg-12">
                      <div class="form-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                        <input class="form-control" name="dateNaiss" id="registration-date" type="date">
                      </div>
                    </div>
                    <!-- Form Group -->
                    <div class="col-12 col-lg-12">
                      <div class="form-group">
                        <input type="text" class="form-control mb-30" name="AdressUser" placeholder="Adresse ">
                      </div>
                    </div>
                    <div class="col-12 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control mb-30" name="VilleUser" placeholder="Votre Ville" required>
                      </div>
                    </div>
                    <!-- Form Group -->
                    <div class="col-12 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control mb-30" name="CodePUser" placeholder="Code postale " required>
                      </div>
                    </div>
                    <div class="col-12 col-lg-12">
                      <div class="form-group">
                        <input type="text" class="form-control mb-30" name="TelUser" placeholder="Votre Tel ">
                      </div>
                    </div>
                    <div class="col-12 col-lg-12">
                      <div class="form-group">
                        <select class="form-control" style="font-family: 'FontAwesome' , 'TATSanaChon';" name="niveau">
                          <option> No Study/No diploma </option>
                          <option> College/Brevet </option>
                          <option> BAC+2 </option>
                          <option> BAC+3 </option>
                          <option> BAC+4 </option>
                          <option> BAC+5 </option>
                        </select>
                      </div>
                    </div>
                    <div class="col-12 col-lg-12">
                      <div class="form-group">
                        <select class="form-control" style="font-family: 'FontAwesome' , 'TATSanaChon';" name="post">
                          <option> Not occupied at all </option>
                          <option> Studying </option>
                          <option> Freelancer </option>
                          <option> Employee </option>
                          <option> Other... </option>
                        </select>
                      </div>
                    </div>
                    <div class="col-12 col-lg-12">
                      <div class="form-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="validatedCustomFile" name="chemin" required>
                          <label class="custom-file-label" for="validatedCustomFile">Your CV</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-12">
                      <div class="form-group">
                        <textarea name="motivation" rows="6" cols="60" placeholder=" Your motivation "></textarea>
                      </div>
                    </div>
                    <!-- Form Group -->
                    <!-- Button -->
                    <div class="col-12">
                      <button type="submit" class="btn btn-style btn-outline-primary" name="ApplyBtn" style=" color: black;">Apply <i class="zmdi zmdi-long-arrow-right"></i></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>


  </section>

  <!-- jobs -->
  <br><br>
  <!-- footer -->
  <?php include 'footer.php' ?>
  <!-- //footer -->

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