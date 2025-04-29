<footer id="footer" class="footer light-background">
    @if(!empty($sub_footer))
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3>Our Services</h3>
          </div>
        </div>
        <div class="row gy-1">
          @foreach($header_services as $val)
            <div class="col-lg-3">
              <a href="{{URL::to('/'.$val->slug)}}"><i class="{{$val->icon}}"></i> {{$val->name}}</a>
            </div>
            @foreach($val->subServices as $sub)
              <div class="col-lg-3 hide-mobile">
                <a href="{{URL::to('/'.$val->slug.'/'.$sub->slug)}}"><i class="{{$sub->icon}}"></i> {{$sub->name}}</a>
              </div>
            @endforeach
          @endforeach
        </div>
      </div>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3>Blog Categories</h3>
          </div>
        </div>
        <div class="row gy-1">
          @foreach($blog_categories as $val)
            <div class="col-lg-3">
              <a href="{{URL::to('/blogs/'.$val->slug)}}">{{$val->name}} &nbsp;<font class="text-theme"><small><small>({{count($val->blogs)}})</small></small></font></a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    @endif
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-2 col-6 footer-links">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="{{route('blogs')}}">Blogs</a></li>
              <li><a href="{{route('services')}}">Services</a></li>
              <li><a href="{{route('about')}}">About Us</a></li>
              <li><a href="{{route('contact')}}">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Support</h4>
            <ul>
              <li><a href="{{route('faq')}}">FAQ</a></li>
              <li><a href="{{route('caseStudies')}}">Case Studies</a></li>
              <li><a href="{{route('privacy')}}">Privacy Policy</a></li>
              <li><a href="{{route('terms')}}">Terms & Conditions</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 footer-about">
            <a href="{{URL::to('/')}}" class="logo d-flex align-items-center" aria-label="Home">
              <img src="{{URL::to('/public/assets/img/mini-logo-white.png')}}" alt="Footer Logo" loading="lazy">
            </a>
            <p>Smarter Marketing, Better Outcomes.<br><br>Boost your brand’s visibility, enhance campaign performance</p>
            <div class="social-links d-flex mt-4">
              <a href="https://www.linkedin.com/company/datamysite/" aria-label="Linkedin"><i class="bi bi-linkedin"></i></a>
              <a href="https://www.instagram.com/datamysite/" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start" style="padding: 30px 20px;">
            <h4>Subscribe Our Newsletter</h4>
            <p>Sign up now and get the edge!</p>
            <form id="newsletterForm" action="{{route('newsletter.subscribe')}}">
              @csrf
              <div class="row footer-subscribe">
                <div class="col-lg-9">
                  <input type="email" name="email" class="form-control form-control-lg" placeholder="Your Email" required>
                </div>
                <div class="col-lg-3">
                  <button class="btn btn-lg btn-primary subscribe-btn">SUBSCRIBE</button>
                </div>
              </div>
            </form>

            <div class="footer-contact-block">
              <p>
                <i class="bi bi-telephone"></i> 
                <a href="tel:0525287259">+971 52 528 7259</a>
              </p>
              <p>
                <i class="bi bi-envelope-at"></i>
                <strong class="email-slot">contact@datamysite.com</strong> 
                <a href="javascript:void(0)" onclick="copyEmail('contact@datamysite.com', this);" class="copy-email">
                  <span class="bi bi-copy"></span>&nbsp;&nbsp;Copy
                </a>
              </p>
              <p>
                <i class="bi bi-pin-map"></i> 
                Office - 205, Al Bayan Building, Dubai Investment Park, Dubai - UAE
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="copyright text-center">
      <div class="container ">
        <p><span>Copyright ©</span> <strong class="px-1 sitename">DataMySite</strong> {{date('Y')}}. <span>All Rights Reserved. Powered By <a href="https://daralafkarmarketing.ae/" target="_blank"><strong>Dar Alafkar Marketing LLC.</strong></a></span></p>
      </div>
    </div>

  </footer>


  <!-- Preloader -->
  <div id="preloader"></div>