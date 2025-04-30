<header id="header" class="header d-flex align-items-center light-background sticky-top">
  <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="{{URL::to('/public')}}/logo-black.png" alt="">
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{URl::to('/')}}" class="active">Home</a></li>
        <li><a href="{{route('about')}}">About Me</a></li>
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