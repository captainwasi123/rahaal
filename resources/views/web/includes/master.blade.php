<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{env('APP_NAME')}}</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{URL::to('/public')}}/favicon.png" rel="icon">
  <link href="{{URL::to('/public')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="{{URL::to('/public')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{URL::to('/public')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{URL::to('/public')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{URL::to('/public')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{URL::to('/public')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{URL::to('/public')}}/assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{URL::to('/public')}}/logo-black.png" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{URl::to('/')}}" class="active">Home</a></li>
          <li><a href="">About Me</a></li>
          <li><a href="">Blogs</a></li>
          <li><a href="">Episodes</a></li>
          <li><a href="">Collaborate</a></li>
          <li><a href="">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="{{URL::to('/public')}}/rahaal-bg3.jpg" alt="" data-aos="fade-in">

      <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-8">
            <h2 class="text-white text-shadow">Rahaal <small>- The Explorer</small></h2>
            <p class="text-shadow text-white">
              I'm a <span class="text-theme2 text-bold text-italic">travel filmmaker</span> on a mission to <span class="text-theme text-bold text-italic">explore the world</span>, <br>
              tell raw human stories and <br>
              uncover the unseen.
            </p>
            <a href="" class="btn-get-started box-shadow text-shadow">Watch My Journey</a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Rahaal - The Explorer</strong>. <span>All Rights Reserved<br></span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{URL::to('/public')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{URL::to('/public')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{URL::to('/public')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{URL::to('/public')}}/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{URL::to('/public')}}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{URL::to('/public')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{URL::to('/public')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{URL::to('/public')}}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="{{URL::to('/public')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="{{URL::to('/public')}}/assets/js/main.js"></script>

</body>

</html>