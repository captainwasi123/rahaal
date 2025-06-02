<footer id="footer" class="footer light-background">
  <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-about">
            <a href="{{URL::to('/')}}" class="logo d-flex align-items-center">
              <img src="{{URL::to('public/logo-black.png')}}" class="footer-signature" alt="Rahaal Signature">
            </a>
            <p>
              Each episode brings a new adventure, a new challenge, and a new perspective. I don’t just explore landscapes, I explore emotions, culture, and purpose.
              <br>
              Follow my journey on social media for daily updates and behind-the-scenes moments.
            </p>
            <p class="contact-follow">
                <a href="https://www.youtube.com/@rahaal_01" target="_blank" class="box-shadow"><span class="bi bi-youtube"></span></a>
                <a href="https://www.instagram.com/rahaal_01" target="_blank" class="box-shadow"><span class="bi bi-instagram"></span></a>
                <a href="https://www.facebook.com/rahaal01" target="_blank" class="box-shadow"><span class="bi bi-facebook"></span></a>
                <a href="https://www.tiktok.com/@rahaal_01" target="_blank" class="box-shadow"><span class="bi bi-tiktok"></span></a>
            </p>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="{{URL::to('/')}}">Home</a></li>
              <li><a href="{{route('about')}}">About us</a></li>
              <li><a href="{{route('episodes')}}">Episodes</a></li>
              <li><a href="{{route('experience')}}">My Experience</a></li>
              <li><a href="{{route('blogs')}}">Blogs</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Blog Categories</h4>
            <ul>
              @foreach($blog_categories as $val)
                @if(count($val->blogs) > 0)
                  <li><a href="{{URL::to('/blogs/'.$val->slug)}}">{{$val->name}} <small>({{count($val->blogs)}})</small></a></li>
                @endif
              @endforeach
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <div class="footer-newsletter">
              <h4>Newsletter</h4>
              <p>Subscribe for our latest updates.</p>
              <input type="email" class="form-control" placeholder="Enter Your Email">
              <button type="submit" class="btn btn-primary">Get in Touch</button>
            </div>

            
            <!-- <p class="mt-4"><strong>Phone:</strong> <span>+971 00 0000000</span></p> -->
            <p class="mt-4"><a href="mailto:contact@rahaal-theexplorer.com"><strong>Email:</strong> <span>contact@rahaal-theexplorer.com</span></a></p>
          </div>

        </div>
      </div>
    </div>

  <div class="container">
    <div class="copyright text-center ">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Rahaal - The Explorer</strong>. <span>All Rights Reserved<br></span></p>
    </div>
  </div>

</footer>