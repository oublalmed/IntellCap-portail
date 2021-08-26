<!--header-->
<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke px-0">
            <h1> <a class="navbar-brand" href="index.php">
                    <span class="fa fa-server"></span> IntellCap</a></h1>
            <!-- if logo is image enable this   
  <a class="navbar-brand" href="#index.html">
      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
  </a> -->
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item @@about__active">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item @@services__active">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item @@contact__active">
                        <a class="nav-link" href="interships.php">Jobs & Internships</a>
                    </li>
                    <li class="nav-item @@contact__active">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item @@Logout__active">
                        <?php
                        if (isset($_SESSION['idUser'])) {
                            echo '<a class="nav-link" href="logout.php" class="btn confer-btn mt-3 mt-lg-0 " style="color:white;"><b> Logout</b></a>';
                        }else{
                            echo '<a class="nav-link" href="signup.php" class="btn confer-btn mt-3 mt-lg-0 " style="color:white;"><b> Login</b></a>';
                        }
                        ?>
                    </li>
                    <!--/search-right-->
                    <div class="search-right mx-lg-3">
                        <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                        <!-- search popup -->
                        <div id="search" class="pop-overlay">
                            <div class="popup">
                                <form action="error.html" method="GET" class="search-box">
                                    <input type="search" placeholder="Enter Keyword" name="search" required="required" autofocus="">
                                    <button type="submit" class="btn"><span class="fa fa-search" aria-hidden="true"></span></button>
                                </form>
                            </div>
                            <a class="close" href="#close">×</a>
                        </div>
                        <!-- /search popup -->
                    </div>
                    <!--//search-right-->
                </ul>
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>

                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>
<!--/header-->