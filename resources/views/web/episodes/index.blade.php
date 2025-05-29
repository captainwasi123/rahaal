@extends('web.includes.master')

@section('content')
  <main class="main">

      <!-- About Section -->
      <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Watch the latest episodes now</h2>
            <p>
                Real Stories. Unfiltered Journeys. Visually Told.
                <br>
                Each episode is more than just a travel vlog—it's a cinematic story blending raw landscapes, local characters, and immersive experiences.
                <br>
                Here, you'll find full travel episodes, expedition series, behind-the-scenes footage, and deep dives into the stories that rarely make it to the spotlight.

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
              @foreach($playlists as $val)
                @if(count($val->episodes) !== 0)
                  @php $s = 1; @endphp
                  <div class="episode-playlist">
                      <div class="playlist-heading">
                          <h3 class="text-thorn">{{$val->title}}</h3>
                          <a href="{{$val->visit_link}}">Open on Youtube  <i class="bi bi-box-arrow-up-right"></i></a>
                      </div>
                      <br>
                      <div class="playlist-data blog-portrait-card row">
                        @foreach($val->episodes_desc as $ep)
                          @if($s <= 6)
                          <div class="col-lg-4">
                            <a href="{{$ep->visit_link}}" target="_blank">
                              <div class="popular-card blog-card-2 flex-grow-1">
                                <div class="card-image">
                                  <img src="{{URL::to('public/storage/episodes/'.$ep->image)}}" alt="{{$val->img_alt}}">
                                </div>
                                <div class="popular-text">
                                  <h6 class="mt-2 mmb-5">{{$ep->title}}</h6>
                                  <small>by <font class="text-theme2">{{@$ep->user->fullname}}</font> - <font class="text-bold">{{date('d-M-Y', strtotime($ep->created_at))}}</font></small>
                                </div>
                              </div>
                            </a>
                          </div>
                          @php $s++; @endphp
                          @endif
                        @endforeach
                      </div>
                      <br>
                      <img class="ending-line" src="{{URL::to('public/ending-line.png')}}">
                  </div>
                @endif
              @endforeach
              <p class="text-center">
                <br>
                <strong>Leave a comment</strong> and share your thoughts—I’d love to hear from you.
              </p>


              
              <div class="row g-3 mt-4">
                @include('web.includes.elements.topStories')
              </div>
            </div>

            <div class="col-lg-3 d-flex flex-column gap-3">
              <div class="blog-aside">
                
                @include('web.includes.elements.aside')
                
              </div>
            </div>
          </div>


          <div class="row g-3 mt-4">
            @include('web.includes.elements.v-ad')
          </div>
        </div>

      </section><!-- /About Section -->
      <br>
    </main>
@endsection