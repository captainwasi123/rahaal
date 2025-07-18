@extends('web.includes.master')

@section('content')
  <main class="main">

      <!-- About Section -->
      <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{$playlist->title}} - Episodes</h2>
            <p>
                {{$playlist->description}}

                <br><br>
            </p>
            <div class="blog-header blog-header2">
                <img src="{{URL::to('public/youtube-cover.jpg')}}" >
                <div class="blog-header-overlay"></div>
            </div>
          
        </div><!-- End Section Title -->

      </section><!-- /About Section -->

      <!-- About Section -->
      <section id="about" class="about section collab-section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row g-3">

            <div class="col-lg-9">
                  <div class="episode-playlist episode-playlist2">
                      <div class="playlist-data blog-portrait-card row">
                        @foreach($playlist->episodes_desc as $ep)
                          <div class="col-lg-4">
                            <a href="{{$ep->visit_link}}" target="_blank">
                              <div class="popular-card blog-card-2 flex-grow-1">
                                <div class="card-image">
                                  <img src="{{URL::to('public/storage/episodes/'.$ep->image)}}" alt="{{$ep->title}}">
                                </div>
                                <div class="popular-text">
                                  <h6 class="mt-2 mmb-5">{{$ep->title}}</h6>
                                  <small>by <font class="text-theme2">{{@$ep->user->fullname}}</font> - <font class="text-bold">{{date('d-M-Y', strtotime($ep->created_at))}}</font></small>
                                </div>
                              </div>
                            </a>
                          </div>
                        @endforeach
                      </div>
                      <br>
                      <img class="ending-line" src="{{URL::to('public/ending-line.png')}}">
                  </div>

                  <div class="blog-content">
                      {!! $playlist->description_long !!}
                  </div>

                  
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