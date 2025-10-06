<header id="header" class="header d-flex align-items-center light-background sticky-top">
  <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

    <a href="{{URL::to('/')}}" class="logo d-flex align-items-center me-auto me-xl-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="{{URL::to('/public')}}/logo-black.png" class="brand-logo-dark" alt="Logo">
      <img src="{{URL::to('/public')}}/logo-w.png" class="brand-logo-white" alt="Logo">
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{URl::to('/')}}"  class="{{!empty($nav) && $nav == 'home' ? 'active' : ''}}">HOM<span class="text-theme2">E</span></a></li>
        <li><a href="{{route('experience')}}"  class="{{!empty($nav) && $nav == 'experience' ? 'active' : ''}}">MY E<span class="text-theme2">X</span>PERIENCE</a></li>
        <li class="dropdown"><a href="{{route('episodes')}}" class="{{!empty($nav) && $nav == 'episodes' ? 'active' : ''}}">E<span class="text-theme2">P</span>ISODES <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            @foreach($all_playlists as $val)
                @if(count($val->episodes) !== 0)
                  <li><a href="{{route('episodes.playlist', $val->slug)}}">{{$val->title}}</a></li>
                @endif
            @endforeach
          </ul>
        </li>
        <li><a href="{{route('blogs')}}"  class="{{!empty($nav) && $nav == 'blogs' ? 'active' : ''}}">B<span class="text-theme2">L</span>OGS</a></li>
        <li><a href="{{route('about')}}"  class="{{!empty($nav) && $nav == 'about' ? 'active' : ''}}">AB<span class="text-theme2">O</span>UT ME</a></li>
        <li><a href="{{route('collaborate')}}"  class="{{!empty($nav) && $nav == 'collaborate' ? 'active' : ''}}">COLLABO<span class="text-theme2">R</span>ATE</a></li>
        <li><a href="{{route('reach-out')}}"  class="{{!empty($nav) && $nav == 'contact' ? 'active' : ''}}">R<span class="text-theme2">E</span>ACH OUT</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <div class="header-social-links">
      @if(Auth::check())
        <a href="{{route('user.dashboard')}}" class="header-search"><i class="bi bi-person"></i> <span>Profile</span></a>
      @else
        <a href="{{route('write-for-us')}}" class="header-search"><i class="bi bi-pencil"></i> &nbsp;<span>Write For Us</span></a>
      @endif
      <button type="button"  class="header-search Search-btn"><i class="bi bi-search"></i> <span>Search</span></button>
    </div>

  </div>
</header>