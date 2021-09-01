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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<!-- Start the session -->
<?php session_start(); ?>

<body>
  <!--header-->
  <?php include 'header.php' ?>
  <!--/header-->
  <?php include 'connexion.php' ?>

  <script>
    var select = document.getElementById('List');
    var value = select.options[select.selectedIndex].value;
  </script>

  <?php

  if (isset($_POST['saveD'])) {

    $dateDemande = $_POST['dateD'];
    $idService = 5;
    $idUser = $_SESSION['idUser'];
    $needs = $_POST['needs'];
    $insertIntoRes = mysqli_query($con, "INSERT into demandes values('','" . $dateDemande . "','" . $needs . "','" . $idService . "','" . $idUser . "') ");

    echo "<script>alert('Thank you for your request . Welcome !');</script>";
  }

  ?>

  <section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container py-lg-4 py-md-3">
        <h2 class="title">Our Services</h2>
        <ul class="breadcrumbs-custom-path mt-2 text-center">
          <li><a href="index.php">Home</a></li>
          <li class="mx-2">/ </li>
          <li class="active"> Services </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="w3l-index3" id="work">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
          <div class="col-lg-7 align-self">
            <h5 class="small mb-2">Services overview</h5>
            <h3 class="title-big">We See Things That Others Miss</h3>
            <p class="mt-4">Research & Technology development for Aerospace, Artificial Intelligence (A.I.),
              Smart Materials, Structures & Systems, Bio-Engineering, Robotics, Environment sensor based tech...</p>
            <button type="button" class="btn btn-style btn-primary mt-sm-5 mt-4" data-toggle="modal" data-target="#exampleModalCenter">Ask for service</button>
            <button type="button" class="btn btn-style btn-primary mt-sm-5 mt-4" data-toggle="modal" data-target=".bd-example-modal-lg">My services</button>
          </div>
          <div class="col-lg-5 mt-lg-0 mt-md-5 mt-4 left-wthree-img">
            <img src="assets/images/IA.jpg" alt="" class="img-fluid radius-image">
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Ask for service</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="login" onsubmit="process(event)">
                    <div class="row">
                      <!-- Form Group -->
                      <div class="col-12 col-lg-6">
                        <div class="form-group">
                          <input type="text" class="form-control mb-30" name="NomClient" placeholder="Votre Nom" required>
                        </div>
                      </div>
                      <!-- Form Group -->
                      <div class="col-12 col-lg-6">
                        <div class="form-group">
                          <input type="text" class="form-control mb-30" name="PrenomClient" placeholder="Votre Prénom " required>
                        </div>
                      </div>
                      <!-- Form Group -->
                      <div class="col-12 col-lg-12">
                        <div class="form-group">
                          <input type="email" class="form-control mb-30" name="EmailClient" placeholder="adresse email" required>
                        </div>
                      </div>
                      <!-- Form Group -->
                      <!-- Form Group -->
                      <div class="col-12 col-lg-12">
                        <div class="form-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                          <input class="form-control" id="registration-date" type="date" name="dateD">
                        </div>
                      </div>
                      <!-- Form Group -->
                      <script>
                        function myFunction() {
                          var x = document.getElementById("List").value;
                          if (x == "Aerospace") {
                            document.getElementById("price").value = "200K";
                          } else if (x == "Water") {
                            document.getElementById("price").value = "300K";
                          } else if (x == "Automative") {
                            document.getElementById("price").value = "240K";
                          } else if (x == "Smart building") {
                            document.getElementById("price").value = "600K";
                          } else if (x == "RESEARCH & TECHNOLOGY") {
                            document.getElementById("price").value = "20K";
                          } else if (x == "RESEARCH & TECHNOLOGY") {
                            document.getElementById("price").value = "140K";
                          } else {
                            document.getElementById("price").value = "90K";
                          }
                        }
                      </script>
                      <div class="col-12 col-lg-12">
                        <div class="form-group">
                          <select class="form-control" style="font-family: 'FontAwesome' , 'TATSanaChon';" id="List" onclick="myFunction()">
                            <option> List services </option>
                            <?php
                            $getJobs = mysqli_query($con, "SELECT * from services");
                            while ($resS = mysqli_fetch_assoc($getJobs)) {
                            ?>
                              <option> <?php echo $resS['libelleService']; ?></option>
                            <?php  } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-12 col-lg-12">
                        <div class="form-group">
                          <input type="Text" class="form-control mb-30" id="price" name="PrixSer" placeholder="Price of service" disabled="true" required>
                        </div>
                      </div>
                      <div class="col-12 col-lg-12">
                        <div class="form-group">
                          <input type="text" class="form-control mb-30" id="phone" name="TelClient" placeholder="Votre Tel ">
                        </div>
                      </div>
                      <div class="col-12 col-lg-12">
                        <div class="form-group">
                          <textarea name="needs" rows="5" cols="50" placeholder=" Your needs "></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" name="saveD">Save </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Large modal -->
          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">My services</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Service name</th>
                        <th scope="col">price</th>
                        <th scope="col">date request </th>
                        <th scope="col">Actions </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      if (isset($_GET['idDemandeSup'])) {
                        $idDemandeSup = $_GET['idDemandeSup'];
                        $deleteDem = mysqli_query($con, "DELETE from demandes where idDemande='" . $idDemandeSup . "' ");
                        if ($deleteDem) {
                          echo "<script>alert('suppression de Demande avec succés');</script>";
                        } else {
                          echo "<script>alert('suppression de Demande échouées');</script>";
                        }
                      
                      }
                      ?>

                      <?php

                      if (isset($_SESSION['idUser'])) {
                        $idUser = $_SESSION['idUser'];
                        $getServices = mysqli_query($con, "SELECT * from users u , demandes d , services s where u.iduser = d.idUser and s.idService = d.idService and d.idUser = '" . $idUser . "'");
                        while ($resD = mysqli_fetch_assoc($getServices)) {

                      ?>
                          <tr>
                            <th scope="row"><?php echo $resD['idDemande']; ?></th>
                            <td><?php echo $resD['libelleService']; ?></td>
                            <td><?php echo $resD['price']; ?></td>
                            <td><?php echo $resD['dateDmd']; ?></td>
                            <td><a href="?idDemandeSup=<?php echo $resD['idDemande']; ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a></td>
                          </tr>
                      <?php  }
                      } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="w3l-features-8" id="services">
    <!-- /features -->
    <div class="features py-5" id="services">
      <div class="container py-lg-5 py-md-4 py-2">
        <h5 class="small">Our Services</h5>
        <h3 class="title-big mb-md-5 mb-4">Services List</h3>
        <div class="fea-gd-vv text-center row">
          <div class="float-top col-lg-3 col-md-6">
            <a href="#url"><img src="assets/images/Aero.jpg" class="img-responsive" alt=""></a>
            <div class="float-lt feature-gd"><br>
              <h3><a href="#url"></a>Aerospace</h3>
              <p> INTELLCAP succeeded in gathering over the last 10 years a team of outstanding experts in the fields of aeronautics...</p>
              <a href="#url" class="read">Read more</a>
            </div>
          </div>
          <div class="float-top col-lg-3 col-md-6 mt-md-0 mt-5">
            <a href="#url"><img src="assets/images/Water.jpg" class="img-responsive" alt=""></a>
            <div class="float-lt feature-gd">
              <h3><a href="#url">Water</a> </h3>
              <p> NTELLCAP operates in the field of water, and more specifically in the development of smart irrigation systems...</p>
              <a href="#url" class="read">Read more</a>
            </div>
          </div>
          <div class="float-top col-lg-3 col-md-6 mt-lg-0 mt-5">
            <a href="#url"><img src="assets/images/auto.jpg" class="img-responsive" alt=""></a>
            <div class="float-l
            t feature-gd"><br>
              <h3><a href="#url">Automative</a> </h3>
              <p> INTELLCAP is initiating a new approach for R&T projects.</p><br><br>
              <a href="#url" class="read">Read more</a>
            </div>
          </div>
          <div class="float-top col-lg-3 col-md-6 mt-lg-0 mt-5">
            <a href="#url"><img src="assets/images/smart.jpg" class="img-responsive" alt=""></a>
            <div class="float-lt feature-gd"><br>
              <h3><a href="#url">SMART BUILDING</a> </h3>
              <p> INTELLCAP offers turnkey hardware and software solutions for smart buildings via deification Monitoring Systems</p>
              <a href="#url" class="read">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //features -->
  </section>
  <section class="w3-about-2" id="choose">
    <div class="w3-services-ab py-5">
      <div class="container py-lg-5 py-md-4">
        <h5 class="small text-light text-center">We enjoy working</h5>
        <h3 class="title-big mb-5 text-center">Why people Choose us</h3>
        <div class="w3-services-grids">
          <div class=" w3-services-right-grid pl-lg-5 mx-auto">
            <div class="fea-gd-vv row">
              <div class="col-lg-4 col-md-6">
                <div class="float-lt feature-gd">
                  <div class="icon-info">
                    <h5 class="small">what we do</h5>
                    <h3 class="title-big mb-4 mt-2"><span>Services</span></h3>
                    <p> Lorem ipsum dolor sit amet, sed eiusmod tempor
                      incididunt </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="float-mid feature-gd">
                  <div class="icon-info">
                    <h5 class="small">what we offer</h5>
                    <h3 class="title-big mb-4 mt-2"><span>Expertise</span></h3>
                    <p> Lorem ipsum dolor sit amet, sed eiusmod tempor
                      incididunt </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 pt-lg-0 pt-md-2">
                <div class="float-rt feature-gd">
                  <div class="icon-info">
                    <h5 class="small">help and support</h5>
                    <h3 class="title-big mb-4 mt-2"><span>Support</span></h3>
                    <p> Lorem ipsum dolor sit amet, sed eiusmod tempor
                      incididunt </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- home page block -->
  <section class="w3l-service-grids py-5">
    <div class="container py-lg-5 py-md-4 py-2">
      <h5 class="small text-center">Why people trust us</h5>
      <h3 class="title-big mb-5 text-center">People <span>Trust us</span></h3>
      <div class="row text-center">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="box-wrap">
            <div class="box-grid">
              <img src="assets/images/icon1.png" alt="" />
              <div class="info mt-4">
                <h4 class="title-small">Integration</h4>
              </div>
            </div>
            <p class="mt-4 pt-2">IntellCap had accumulated a large and specific know-how in high-tech domains, throughout many industrial programs ...</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-md-0 mt-5">
          <div class="box-wrap border-grid">
            <div class="box-grid">
              <img src="assets/images/icon2.png" alt="" />
              <div class="info mt-4">
                <h4 class="title-small">developpment </h4>
              </div>
            </div>
            <p class="mt-4 pt-2">Study, design, simulate, proof-concept, prototype, test-engineer, develop (complex solutions combining multi-disciplinary ... </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-5">
          <div class="box-wrap">
            <div class="box-grid">
              <img src="assets/images/icon3.png" alt="" />
              <div class="info mt-4">
                <h4 class="title-small">Responsibility</h4>
              </div>
            </div>
            <p class="mt-4 pt-2">ensuring an economic advantage both to the region from where the purchase arrived and to the region where it is marketed</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //home page block -->

  <!-- footer -->
  <?php include 'footer.php' ?>
  <!-- //footer -->


  <!-- Common jquery plugin -->
  <script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
  </script>
  <script>
    function getIp(callback) {
      fetch('https://ipinfo.io/json?token=<your token>', {
          headers: {
            'Accept': 'application/json'
          }
        })
        .then((resp) => resp.json())
        .catch(() => {
          return {
            country: 'us',
          };
        })
        .then((resp) => callback(resp.country));
    }
    const phoneInput = window.intlTelInput(phoneInputField, {
      initialCountry: "auto",
      geoIpLookup: getIp,
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
    const phoneInput = window.intlTelInput(phoneInputField, {
      preferredCountries: ["us", "co", "in", "de"],
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
  </script>

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