@extends('web.includes.master')

@section('content')
@php
    $firstBlogChunk = $data->slice(0, 3);
    $lastBlogChunk = $data->slice(3);
@endphp
  <main class="main">

      <!-- About Section -->
      <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>My Experience</h2>
          <p>
            Explore in-depth stories, detailed guides, and firsthand insights from my adventures across stunning landscapes and hidden gems. 
            <br>
            This section is where I document each journey with precision—combining personal experience with practical information. From exploring rugged terrains to uncovering cultural treasures, these blogs are packed with real tips, place reviews, and everything you need to plan your own adventure with confidence.
          </p>
        </div><!-- End Section Title -->

      </section><!-- /About Section -->

      <!-- About Section -->
      <section id="about" class="about section collab-section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row g-3">

            <div class="col-lg-9">
              <div class="blog-card">
                  <div class="blog-card-head">
                    <h2 class="text-thorn">What<small class="font-size-20">'s</small> Trending</h2>
                    <ul>
                      <li><a href="">Adventures</a></li>
                      <li><a href="">Travel Guides</a></li>
                      <li><a href="">Gear & Reviews</a></li>
                      <li><a href="">Hidden Destinations</a></li>
                    </ul>
                  </div>

                  <div class="blog-card-body">
                    <div class="row">
                      <div class="col-lg-8">

                        @foreach($lastBlogChunk as $val)
                          <a href="{{URL::to('/'.$val->slug)}}">
                            <div class="popular-card blog-card-2 flex-grow-1">
                              <div class="card-image">
                                <img src="{{URL::to('public/storage/blogs/'.$val->banner)}}" alt="{{$val->banner_alt}}">
                              </div>
                              <div class="popular-text">
                                <h6 class="mt-2">{{$val->heading}}</h6>
                                <p>{{$val->short_description}}</p>
                                <small>by <font class="text-theme2">{{@$val->author->name}}</font> - <font class="text-bold">{{date('d-M-Y', strtotime($val->created_at))}}</font></small>
                              </div>
                            </div>
                          </a>
                        @endforeach

                        
                        
                      </div>
                      <div class="col-lg-4">
                        <div class="blog-portrait-card">
                          @foreach($firstBlogChunk as $val)
                            <a href="{{URL::to('/'.$val->slug)}}">
                              <div class="popular-card blog-card-2 flex-grow-1">
                                <div class="card-image">
                                  <img src="{{URL::to('public/storage/blogs/'.$val->banner)}}" alt="{{$val->banner_alt}}">
                                </div>
                                <div class="popular-text">
                                  <h6 class="mt-2">{{$val->heading}}</h6>
                                  <p class="line-break-3">{{$val->short_description}}</p>
                                  <small>by <font class="text-theme2">{{@$val->author->name}}</font> - <font class="text-bold">{{date('d-M-Y', strtotime($val->created_at))}}</font></small>
                                </div>
                              </div>
                            </a>
                          @endforeach

                          
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>

            <div class="col-lg-3 d-flex flex-column gap-3">
              <div class="blog-aside">
                
                @include('web.includes.elements.aside')

              </div>
            </div>
          </div>

          <div class="row g-3 mt-4">
            @include('web.includes.elements.topStories')
          </div>

          <div class="row g-3 mt-4">
            @include('web.includes.elements.v-ad')
          </div>
        </div>

      </section><!-- /About Section -->
      <br>
    </main>
@endsection