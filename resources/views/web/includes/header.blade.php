<header id="header" class="header d-flex align-items-center light-background sticky-top">
  <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

    <a href="{{URL::to('/')}}" class="logo d-flex align-items-center me-auto me-xl-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="{{URL::to('/public')}}/logo-black.png" alt="">
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{URl::to('/')}}"  class="{{!empty($nav) && $nav == 'home' ? 'active' : ''}}">HOM<span class="text-theme">E</span></a></li>
        <li><a href="{{route('experience')}}"  class="{{!empty($nav) && $nav == 'experience' ? 'active' : ''}}">MY E<span class="text-theme">X</span>PERIENCE</a></li>
        <li><a href="{{route('episodes')}}"  class="{{!empty($nav) && $nav == 'episodes' ? 'active' : ''}}">E<span class="text-theme">P</span>ISODES</a></li>
        <li><a href="{{route('blogs')}}"  class="{{!empty($nav) && $nav == 'blogs' ? 'active' : ''}}">B<span class="text-theme">L</span>OGS</a></li>
        <li><a href="{{route('about')}}"  class="{{!empty($nav) && $nav == 'about' ? 'active' : ''}}">AB<span class="text-theme">O</span>UT ME</a></li>
        <li><a href="{{route('collaborate')}}"  class="{{!empty($nav) && $nav == 'collaborate' ? 'active' : ''}}">COLLABO<span class="text-theme">R</span>ATE</a></li>
        <li><a href="{{route('reach-out')}}"  class="{{!empty($nav) && $nav == 'contact' ? 'active' : ''}}">R<span class="text-theme">E</span>ACH OUT</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <div class="header-social-links">
      <button type="button"  class="header-search"><i class="bi bi-search"></i> Search</button>
    </div>

  </div>
</header>