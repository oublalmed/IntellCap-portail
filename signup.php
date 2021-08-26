<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>IntellCap</title>
    <?php include 'connexion.php' ?>
    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<!-- Start the session -->
<?php session_start(); ?>

<?php if(!isset($_SESSION['idUser'])) ?>
<?php
if(isset($_POST['sinscrireBtn'])){
    $NomUser = $_POST['NomUser'];
    $PrenomUser = $_POST['PrenomUser'];
    $EmailUser = $_POST['EmailUser'];
    $PasseUser = $_POST['PasseUser'];
    $TypeUser = $_POST['TypeUser'];

    $existEmail = mysqli_query($con,"SELECT * from users where mailUser='".$EmailUser."' ");
    $nbrows = mysqli_num_rows($existEmail);
    if($nbrows < 1){
        $insertUser = mysqli_query($con,"INSERT into users values('','".$PrenomUser."','".$NomUser."','".$EmailUser."','".$PasseUser."','".$TypeUser."') ");
        if($insertUser){
            $getEmailCURRENT = mysqli_query($con,"SELECT * from users where mailUser='".$EmailUser."' ");
            $resultU = mysqli_fetch_assoc($getEmailCURRENT);
            $_SESSION['idUser'] = $resultU['idUser'];
            
        }else{
            echo '<script>alert("probleme inscription !");</script>';
        }
        }else{
        echo '<script>alert("Email déja utiliser !");</script>';
    }
}


if(isset($_POST['loginBtn'])){
    $emailLogin = $_POST['emailLogin'];
    $passLogin = $_POST['passLogin'];
    $getEmail = mysqli_query($con,"SELECT * FROM users where mailUser='".$emailLogin."' and password='".$passLogin."' ");
    $nbrows = mysqli_num_rows($getEmail);
    $resultU=mysqli_fetch_assoc($getEmail);

    if($nbrows < 1){
        echo '<script>alert("Email ou mot de passe incorrect !");</script>';
    }else{
        $_SESSION['idUser']= $resultU['idUser'];
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        header('location:/IntellCap/');
        }

    }

?>

<body>
    <!--header-->
    <?php include 'header.php' ?>
    <!--/header-->
            <!-- banner section -->
    <section id="home" class="w3l-banner py-5">
        <div class="container py-lg-5 py-md-4" style="margin-top: -50px;">
        <div class="banner-content mt-5">
                    <center><h3 class="mb-2"><b>IntellCap Corporation </b></h3></center>
                </div>
                <center>
         <div class="align-items-center py-4">
            <div class="align-items-center py-4">
		<!-- form starts here -->
            <!-- Contact Us Area Start -->
    <section class="contact--us-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Contact Us Thumb -->
                <!-- Contact Form -->
                <div class="col-5 col-lg-5" align="center">
                    <div class="contact_from_area mb-100 clearfix">
                        <!-- Contact Heading -->
                        <div class="contact-heading">
                            <h4 style=" color: white;">Sign Up</h4><br>
                        </div>
                        <div class="contact_form">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <div class="contact_input_area">
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="NomUser"  placeholder="Votre Nom" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="PrenomUser"  placeholder="Votre Prénom " required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control mb-30" name="EmailUser" placeholder="adresse email" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group">
                                                <select class="form-control" style="font-family: 'FontAwesome' , 'TATSanaChon';" name="TypeUser">
                                                    <option> Client </option>
                                                    <option> Student </option>
                                                    <option> Partner </option>
                                                </select>                                             
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group">
                                                <input type="password" class="form-control mb-30" name="PasseUser"  placeholder="Mot de passe">
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-style btn-outline-primary" name="sinscrireBtn" style=" color: white;">Register now <i class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-5 col-lg-5" align="center">
                    <div class="contact_from_area mb-100 clearfix">
                        <!-- Contact Heading -->
                        <div class="contact-heading">
                            <h4 style=" color: white;" >Sign In </h4><br>
                        </div>
                        <div class="contact_form">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <div class="contact_input_area">
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="emailLogin" placeholder="adresse Email" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group">
                                                <input type="password" class="form-control mb-30" name="passLogin" placeholder="Mot de Passe" required>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-style btn-outline-primary" name="loginBtn" style=" color: white;">Login<i class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Area End -->
	</div>
    </center>
	<!-- //form ends here -->
            </div>
        </div>
    </section>
    <!-- //banner section -->
    <!-- //home page newsletter -->
    <?php include 'footer.php' ?>
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