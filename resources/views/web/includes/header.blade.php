<header id="header" class="header fixed-top">
    <div class="header-info">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <span>
          <a href="tel:971525287259"><i class="bi bi-telephone"></i>&nbsp; +971 52 528 7259</a>
        </span> 

        <span class="para">
          FREE 15-Min Marketing Strategy Session worth AED 1500 with our Top Marketing expert
        </span> 

        <span>
          <button type="button" class="open-newsletter">Book Now</button>
        </span>  
      </div>
    </div>
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{route('home')}}" class="logo d-flex align-items-center" aria-label="Home">
        <img src="{{URL::to('/public')}}/assets/img/logo.png" alt="Logo">
      </a>
      <a href="tel:971525287259" class="m-phone-link"><i class="bi bi-telephone"></i>&nbsp; +971 525 287 259</a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{route('home')}}" class="{{!empty($nav) && $nav == 'home' ? 'active' : ''}}">Home<br></a></li>
          <li class="visible-mobile">
            <a href="{{route('services')}}" class="{{!empty($nav) && $nav == 'services' ? 'active' : ''}}">Services<br></a>
          </li>
          <li class="dropdown hide-mobile"><a href="{{route('services')}}" class="{{!empty($nav) && $nav == 'services' ? 'active' : ''}}"><span>Services</span> <font style="font-size: 9px;padding: 1px 0px 0px 3px;">▼</font></a>
            <ul>
              @foreach($header_services as $val)
                @if(count($val->subServices) == 0)
                  <li><a href="{{URL::to('/'.$val->slug)}}"><span><i class="{{$val->icon}}"></i> {{$val->name}}</span></a></li>
                @else
                  <li class="dropdown"><a href="{{URL::to('/'.$val->slug)}}"><span><i class="{{$val->icon}}"></i> {{$val->name}}</span> <font style="margin-right: -5px;font-size: 8px;padding: 1px 0px 0px 3px;">▶</font></a>
                    <ul>
                      @foreach($val->subServices as $sub)
                        <li><a href="{{URL::to('/'.$val->slug.'/'.$sub->slug)}}"><span><i class="{{$sub->icon}}"></i> {{$sub->name}}</span></a></li>
                      @endforeach
                    </ul>
                  </li>
                @endif
              @endforeach
            </ul>
          </li>
          <li><a href="{{route('caseStudies')}}" class="{{!empty($nav) && $nav == 'case-studies' ? 'active' : ''}}">Case Studies</a></li>
          <li><a href="{{route('blogs')}}" class="{{!empty($nav) && $nav == 'blogs' ? 'active' : ''}}">Blogs</a></li>
          <li><a href="{{route('about')}}" class="{{!empty($nav) && $nav == 'about' ? 'active' : ''}}">About Us</a></li>
          <li><a href="{{route('faq')}}" class="{{!empty($nav) && $nav == 'faq' ? 'active' : ''}}">FAQ</a></li>
          <li><a href="{{route('contact')}}" class="{{!empty($nav) && $nav == 'contact' ? 'active' : ''}}">Contact Us</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>