@extends('web.includes.master')

@section('content')
  <main class="main">

      <!-- About Section -->
      <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Episodes - Watch the Journey</h2>
            <p>
                Dive into the official episodes from my YouTube channel—where every journey tells a story. From remote mountains to bustling cities, each episode captures raw human emotions, local cultures, survival challenges, and the thrill of exploration. Whether you're here for adventure, inspiration, or untold truths, these are the stories that shaped my path.
                <br><br>
            </p>
            <div class="blog-header">
                <img src="{{URL::to('public/youtube-cover.jpg')}}" >
                <div class="blog-header-overlay"></div>
            </div>
            <div class="episode-author">
                <div>
                    <img src="{{URL::to('public/yt-dp.jpg')}}">
                </div>
                <div>
                    <h4>Rahaal - The Explorer</h4>
                    <a href="">Youtube Channel <i class="bi bi-box-arrow-up-right"></i></a>
                </div>
            </div>
        </div><!-- End Section Title -->

      </section><!-- /About Section -->

      <!-- About Section -->
      <section id="about" class="about section collab-section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row g-3">

            <div class="col-lg-9">
              <div class="episode-playlist">
                  <div class="playlist-heading">
                      <h3 class="text-thorn">Highlighted Places in Dubai</h3>
                      <a href="https://www.youtube.com/@rahaal_01">Open on Youtube  <i class="bi bi-box-arrow-up-right"></i></a>
                  </div>
                  <br>
                  <div class="playlist-data row">
                      <div class="playlist-item col-lg-4">
                        <iframe width="100%" height="185" src="https://www.youtube.com/embed/YMaJI9WxhKw?si=TYv-36Lol8LkM6D2" title="YouTube video player" frameborder="0"    allowfullscreen></iframe>
                      </div>

                      <div class="playlist-item col-lg-4">
                        <iframe width="100%" height="185" src="https://www.youtube.com/embed/S8OLdK1NJF4?si=FHDEd8F5DkwOkZP8" title="YouTube video player" frameborder="0"    allowfullscreen></iframe>
                      </div>

                      <div class="playlist-item col-lg-4">
                        <iframe width="100%" height="185" src="https://www.youtube.com/embed/kRufYOWmjuA?si=UOzeIqqjr-iXGe96" title="YouTube video player" frameborder="0"    allowfullscreen></iframe>
                      </div>

                      <div class="playlist-item col-lg-4">
                        <iframe width="100%" height="185" src="https://www.youtube.com/embed/YMaJI9WxhKw?si=TYv-36Lol8LkM6D2" title="YouTube video player" frameborder="0"    allowfullscreen></iframe>
                      </div>

                      <div class="playlist-item col-lg-4">
                        <iframe width="100%" height="185" src="https://www.youtube.com/embed/S8OLdK1NJF4?si=FHDEd8F5DkwOkZP8" title="YouTube video player" frameborder="0"    allowfullscreen></iframe>
                      </div>

                      <div class="playlist-item col-lg-4">
                        <iframe width="100%" height="185" src="https://www.youtube.com/embed/kRufYOWmjuA?si=UOzeIqqjr-iXGe96" title="YouTube video player" frameborder="0"    allowfullscreen></iframe>
                      </div>
                  </div>
                  <br>
                  <img class="ending-line" src="{{URL::to('public/ending-line.png')}}">
              </div>


              <div class="episode-playlist">
                  <div class="playlist-heading">
                      <h3 class="text-thorn">Northern Pakistan Series</h3>
                      <a href="https://www.youtube.com/@rahaal_01">Open on Youtube  <i class="bi bi-box-arrow-up-right"></i></a>
                  </div>
                  <br>
                  <div class="playlist-data row">
                      <div class="playlist-item col-lg-4">
                        <iframe width="100%" height="185" src="https://www.youtube.com/embed/xW01waWUJjo?si=rIGTQB1z16ptn0IP" title="YouTube video player" frameborder="0"   allowfullscreen></iframe>
                      </div>

                      <div class="playlist-item col-lg-4">
                        <iframe width="100%" height="185" src="https://www.youtube.com/embed/U0QmlTqrwBc?si=Hnb0asMty0z_1DVP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"   allowfullscreen></iframe>
                      </div>

                      <div class="playlist-item col-lg-4">
                        <iframe width="100%" height="185" src="https://www.youtube.com/embed/nh8VYABJ63k?si=MZvgs0T38tEgSAHy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"   allowfullscreen></iframe>
                      </div>
                      
                      <div class="playlist-item col-lg-4">
                        <iframe width="100%" height="185" src="https://www.youtube.com/embed/QpoaUMI376A?si=GgxaFGsrkr_cAvaf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"   allowfullscreen></iframe>
                      </div>

                      <div class="playlist-item col-lg-4">
                        <iframe width="100%" height="185" src="https://www.youtube.com/embed/MmaNX-y_V4w?si=mqCEtBH0k9UcQURH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"   allowfullscreen></iframe>
                      </div>

                      <div class="playlist-item col-lg-4">
                        <iframe width="100%" height="185" src="https://www.youtube.com/embed/3mD8OuyxWRw?si=j2hX_p1xEskT3EqT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"   allowfullscreen></iframe>
                      </div>
                  </div>
                  <br>
                  <img class="ending-line" src="{{URL::to('public/ending-line.png')}}">
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


                <div class="aside-ad">
                  <div class="ad-item">
                    <img src="{{URL::to('public/your_ad_here.png')}}">
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


                <div class="aside-ad">
                  <div class="ad-item">
                    <img src="{{URL::to('public/your_ad_here.jpg')}}" height="105px">
                  </div>
                </div>


                <div class="blog-share">
                    <div class="blog-share-content">
                        <h5 class="text-thorn">Share:</h5>

                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ URL::current() }}" target="_blank" aria-label="Linkedin" class="share-linkedin">
                            <i class="bi bi-linkedin"></i> <span>Linkedin</span>
                        </a>

                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ URL::current() }}&amp;src=sdkpreparse" target="_blank" data-href="https://developers.facebook.com/docs/plugins/" data-layout="" data-size="" class="share-facebook">
                            <i class="bi bi-facebook"></i> <span>Facebook</span>
                        </a>

                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(URL::current()) }}&text=blog" target="_blank" aria-label="twitter" class="share-twitter">
                            <i class="bi bi-twitter"></i> <span>Twitter</span>
                        </a>

                        <a href="https://api.whatsapp.com/send?text={{ urlencode(URL::current()) }}" target="_blank" data-action="share/whatsapp/share" class="share-whatsapp">
                            <i class="bi bi-whatsapp"></i> <span>Whatsapp</span>
                        </a>

                        <a href="javascript:void(0)" data-link="{{ URL::current() }}" class="share-copy">
                            <i class="bi bi-copy"></i> <span>Copy Link</span>
                        </a>
                    </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row g-3 mt-4">
            <div class="col-lg-12">
              <h2 class="text-thorn">Top Stories</h2>
            </div>

            <div class="col-lg-3 mt-0">
              <div class="blog-portrait-card box-shadow">
                
                <div class="popular-card blog-card-2 flex-grow-1">
                  <div class="card-image">
                    <img src="{{URL::to('public/rahaal-bg3.jpg')}}">
                  </div>
                  <div class="popular-text padding-h-6">
                    <h6 class="mt-2">Secretart for Economic Air plane that looks like</h6>
                    <p class="line-break-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <small>by <font class="text-theme2">Alice Cloe</font> - <font class="text-bold">Jun 19, 2020</font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 mt-0">
              <div class="blog-portrait-card box-shadow">
                
                <div class="popular-card blog-card-2 flex-grow-1">
                  <div class="card-image">
                    <img src="{{URL::to('public/rahaal-bg3.jpg')}}">
                  </div>
                  <div class="popular-text padding-h-6">
                    <h6 class="mt-2">Secretart for Economic Air plane that looks like</h6>
                    <p class="line-break-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <small>by <font class="text-theme2">Alice Cloe</font> - <font class="text-bold">Jun 19, 2020</font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 mt-0">
              <div class="blog-portrait-card box-shadow">
                
                <div class="popular-card blog-card-2 flex-grow-1">
                  <div class="card-image">
                    <img src="{{URL::to('public/rahaal-bg3.jpg')}}">
                  </div>
                  <div class="popular-text padding-h-6">
                    <h6 class="mt-2">Secretart for Economic Air plane that looks like</h6>
                    <p class="line-break-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <small>by <font class="text-theme2">Alice Cloe</font> - <font class="text-bold">Jun 19, 2020</font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 mt-0">
              <div class="blog-portrait-card box-shadow">
                
                <div class="popular-card blog-card-2 flex-grow-1">
                  <div class="card-image">
                    <img src="{{URL::to('public/rahaal-bg3.jpg')}}">
                  </div>
                  <div class="popular-text padding-h-6">
                    <h6 class="mt-2">Secretart for Economic Air plane that looks like</h6>
                    <p class="line-break-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <small>by <font class="text-theme2">Alice Cloe</font> - <font class="text-bold">Jun 19, 2020</font></small>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row g-3 mt-4">
            <div class="col-lg-12">
              <img src="{{URL::to('/public/ad-banner.jpg')}}" width="100%">
            </div>
          </div>
        </div>

      </section><!-- /About Section -->
      <br>
    </main>
@endsection