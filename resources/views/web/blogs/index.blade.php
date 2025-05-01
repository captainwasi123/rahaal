@extends('web.includes.master')

@section('content')
  <main class="main">

      <!-- About Section -->
      <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Blogs</h2>
          <p>
            Discover the untold stories, behind-the-scenes moments, and raw experiences from every adventure.
            <br>
            From remote mountain trails to local street stories, this blog is where the camera stops rolling—but the real journey continues. Dive deeper into each episode with personal insights, travel tips, survival lessons, and the emotional moments that didn’t make it to the final cut.
          </p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row g-3">

          <div class="col-lg-4 d-flex flex-column gap-3">
            <div class="featured-card blog-card-2 flex-grow-1" style="background-image: url('{{URL::to('public/rahaal-bg3.jpg')}}');">
              <div class="featured-overlay">
                <h6 class="mt-2">Secretart for Economic Air plane that looks like</h6>
                <small>by <font class="text-theme2">Alice Cloe</font> - <font class="text-white text-bold">Jun 19, 2020</font></small>
              </div>
            </div>
            <div class="featured-card blog-card-2 flex-grow-1" style="background-image: url('{{URL::to('public/rahaal-bg3.jpg')}}');">
              <div class="featured-overlay">
                <h6 class="mt-2">Secretart for Economic Air plane that looks like</h6>
                <small>by <font class="text-theme2">Alice Cloe</font> - <font class="text-white text-bold">Jun 19, 2020</font></small>
              </div>
            </div>
          </div>
            
          <div class="col-lg-8">
            <div class="featured-card blog-card-1" style="background-image: url('{{URL::to('public/rahaal-bg3.jpg')}}');">
              <div class="featured-overlay">
                <h4 class="mt-2">Anna Lora Stuns In White At Her Australian Premiere</h4>
                <small>by <font class="text-theme2">Alice Cloe</font> - <font class="text-white text-bold">Jun 19, 2020</font></small>
              </div>
            </div>
          </div>

        </div>

        </div>

      </section><!-- /About Section -->

      <!-- About Section -->
      <section id="about" class="about section collab-section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row g-3">

          <div class="col-lg-9">
            <div class="blog-card">
                <div class="blog-card-head">
                  <h2 class="text-thorn">Trending</h2>
                  <ul>
                    <li><a href="">Adventures</a></li>
                    <li><a href="">Travel Guides & Tips</a></li>
                    <li><a href="">Gear & Reviews</a></li>
                    <li><a href="">Hidden Destinations</a></li>
                    <li><a href="">Human Stories</a></li>
                  </ul>
                </div>

                <div class="blog-card-body">
                  
                </div>
            </div>
          </div>

          <div class="col-lg-3 d-flex flex-column gap-3">
            <div class="blog-aside">
              
              <div class="social-follow">
                <div>
                  <a href="https://www.youtube.com/@rahaal_01" target="_blank">
                    <span class="bi bi-youtube"></span>
                    <div class="text">
                      12000 +
                      <small>Fans</small>
                    </div>
                  </a>
                  <a href="https://www.instagram.com/rahaal_01" target="_blank">
                    <span class="bi bi-instagram"></span>
                    <div class="text">
                      135 +
                      <small>Fans</small>
                    </div>
                  </a>
                </div>
                <div>
                  <a href="https://www.facebook.com/rahaal01" target="_blank">
                    <span class="bi bi-facebook"></span>
                    <div class="text">
                      800 +
                      <small>Fans</small>
                    </div>
                  </a>
                  <a href="https://www.tiktok.com/@rahaal_01" target="_blank">
                    <span class="bi bi-tiktok"></span>
                    <div class="text">
                      2600 +
                      <small>Fans</small>
                    </div>
                  </a>
                </div>
              </div>


              <div class="popular-section">
                <h5 class="text-thorn">Popular Series</h5>

                <div class="popular-card blog-card-2 flex-grow-1">
                  <img src="{{URL::to('public/rahaal-bg3.jpg')}}">
                  <div class="popular-text">
                    <h6 class="mt-2">Secretart for Economic Air plane that looks like</h6>
                    <small>by <font class="text-theme2">Alice Cloe</font> - <font class="text-bold">Jun 19, 2020</font></small>
                  </div>
                </div>

                <div class="popular-card blog-card-2 flex-grow-1">
                  <img src="{{URL::to('public/rahaal-bg3.jpg')}}">
                  <div class="popular-text">
                    <h6 class="mt-2">Secretart for Economic Air plane that looks like</h6>
                    <small>by <font class="text-theme2">Alice Cloe</font> - <font class="text-bold">Jun 19, 2020</font></small>
                  </div>
                </div>

                <div class="popular-card blog-card-2 flex-grow-1">
                  <img src="{{URL::to('public/rahaal-bg3.jpg')}}">
                  <div class="popular-text">
                    <h6 class="mt-2">Secretart for Economic Air plane that looks like</h6>
                    <small>by <font class="text-theme2">Alice Cloe</font> - <font class="text-bold">Jun 19, 2020</font></small>
                  </div>
                </div>

                <div class="popular-card blog-card-2 flex-grow-1">
                  <img src="{{URL::to('public/rahaal-bg3.jpg')}}">
                  <div class="popular-text">
                    <h6 class="mt-2">Secretart for Economic Air plane that looks like</h6>
                    <small>by <font class="text-theme2">Alice Cloe</font> - <font class="text-bold">Jun 19, 2020</font></small>
                  </div>
                </div>
                
                <div class="popular-card blog-card-2 flex-grow-1">
                  <img src="{{URL::to('public/rahaal-bg3.jpg')}}">
                  <div class="popular-text">
                    <h6 class="mt-2">Secretart for Economic Air plane that looks like</h6>
                    <small>by <font class="text-theme2">Alice Cloe</font> - <font class="text-bold">Jun 19, 2020</font></small>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        </div>

      </section><!-- /About Section -->

    </main>
@endsection