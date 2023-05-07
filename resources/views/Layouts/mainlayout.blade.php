<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="sumayah swaib - digital Marketing,website Designing, Graphics Designing" />
    <meta name="description" content="sumayah swaib - digital Marketing,website designing, " />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>Sumayah Swaib - @yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="resources/css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />



</head>

<body>

    <!-- =====================================
    	==== Start Loading -->

    <div class="loading">
        <div class="gooey">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <!-- End Loading ====
    	======================================= -->


    <!-- =====================================
    	==== Start Navbar -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="#">
                <img src="img/logo-light.png" alt="logo">          
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="icon-bar"><i class="fas fa-bars"></i></span>
			  </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-scroll-nav="0">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="1">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="2">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="3">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="4">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="5">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End Navbar ====
    	======================================= -->


    <!-- =====================================
    	==== Start Header -->

    <header class="header valign bg-img" data-scroll-index="0" data-overlay-dark="4" data-background="img/bg.jpg" data-stellar-background-ratio="0.5">

        <div class="container">
            <div class="row">
                <div class="full-width text-center caption mt-50">
                    <h2>Welcome!</h2>
                    <h1 class="cd-headline push">
                        <span class="blc">I am</span>
                        <span class="cd-words-wrapper">
                              <b class="is-visible">Sumayah Swaib</b>
                              <b>Web Designer</b>
                              <b>Graphics Designer</b>
                              <b>Programmer</b>
                            </span>
                    </h1>
                    <a href="#0" class="butn butn-light mt-30" data-scroll-nav="5">
                        <span>Hire Me!</span>
                    </a>
                    <a href="#0" class="butn butn-bord mt-30" data-scroll-nav="3">
                            <span>View Work</span>
                        </a>
                    <a href="#0" class="butn butn-light mt-30" data-scroll-nav="5">
                            <span>GeT Resume!</span>
                        </a>
                </div>
            </div>
        </div>
    </header>

    <!-- End Header ====
    	======================================= -->

        @yield('Heading')

        @yield('content')

    


   


    <!-- =====================================
        ==== Start Footer -->

    <footer class="text-center bg-dark">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="#">
                    <img src="img/logo-light.png" alt="logo">          
                </a>

            <div class="social">
                <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                <a href="#0"><i class="icofont icofont-social-instagram"></i></a>
                <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                <a href="#0"><i class="icofont icofont-social-whatsapp"></i></a>
            </div>

            <p>&copy; 2020 SUMAYAH SWAIB. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- End Footer ====
        ======================================= -->





    <!-- jQuery -->
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>

    <!-- popper.min -->
    <script src="js/popper.min.js"></script>

    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- scrollIt -->
    <script src="js/scrollIt.min.js"></script>

    <!-- animated.headline -->
    <script src="js/animated.headline.js"></script>

    <!-- jquery.magnific-popup js -->
    <script src="js/jquery.magnific-popup.min.js"></script>

    <!-- stellar js -->
    <script src="js/jquery.stellar.min.js"></script>

    <!-- isotope.pkgd.min js -->
    <script src="js/isotope.pkgd.min.js"></script>

    <!-- validator js -->
    <script src="js/validator.js"></script>

    <!-- custom scripts -->
    <script src="js/scripts.js"></script>

</body>

</html>