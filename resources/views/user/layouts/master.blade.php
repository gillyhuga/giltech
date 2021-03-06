<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Giltech - Jasa Pembuatan Website Terbaik</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <!-- <link href="assets/css/style.css" rel="stylesheet"> -->

  <!-- =======================================================
  * Template Name: Vesperr - v4.7.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">Giltech</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <!-- <li><a class="nav-link scrollto" href="#about">About</a></li> -->
          <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
          <!-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
          <li><a class="nav-link scrollto" href="#pricing">Harga</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    @yield('hero')
    <main id="main">
    @yield('services')
    @yield('pricing')
    @yield('contact')
    </main>
    <!-- <div class="header-bg">&nbsp;</div>
    <section id="wrapper">
        @yield('photo-profile')
        @yield('sidebar-left')
        <div id="mid">
        @yield('content')
        @yield('listapp')
        @yield('profile')
        </div>
        @yield('sidebar-right')   
    </section> -->

    <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Giltech</strong>. All Rights Reserved
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <!-- <a href="#about" class="scrollto">About</a> -->
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


</body>
<link rel="stylesheet" href="css/style.css">
@stack('css')

<script src="{{secure_asset('/js/main.js')}}"></script>
<script src="{{secure_asset('/js/main.js')}}"></script>
<script src="{{secure_asset('/vendor/aos/aos.js')}}"></script>
<script src="{{secure_asset('/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{secure_asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{secure_asset('/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{secure_asset('/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{secure_asset('/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{secure_asset('/vendor/php-email-form/validate.js')}}"></script>
<script src="{{secure_asset('/js/main.js')}}"></script>
<!-- <script src="{{asset('/js/darkmode.js')}}"></script>
<script src="{{asset('/js/listapp.js')}}"></script> -->
@stack('script')


</html>