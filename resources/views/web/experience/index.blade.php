@extends('web.includes.master')
@section('metaAddition')
@if(!empty($nofollow))
<meta name="robots" content="noindex, follow">
@endif
@endsection
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
            Years of Travel. Countless Stories. Real Encounters.
            <br>
            My journey spans across Northern Pakistan’s hidden valleys to the deserts of Arabia, and beyond. Every location I visit adds depth to my storytelling—from scaling the icy trails of Fairy Meadows to navigating the busy bazaars of Skardu.
            With a deep respect for cultures and a passion for adventure, I bring cinematic visuals and heartfelt narratives that reflect the reality of life on the road.

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
                    <h2 class="text-thorn">See where I've been.</h2>
                    <p>Explore the destinations I've filmed and be inspired to discover them for yourself.</p>
                    <ul>
                      @foreach($categories as $val)
                        @if(count($val->blogs) > 0)
                          <li><a href="{{URL::to('/blogs/'.$val->slug)}}">{{$val->name}} <small>({{count($val->blogs)}})</small></a></li>
                        @endif
                      @endforeach
                    </ul>
                  </div>

                  <div class="blog-card-body">
                    <div class="row">
                      <div class="col-lg-8">

                        @foreach($lastBlogChunk as $val)
                          <a href="{{URL::to('/blog/'.$val->slug)}}">
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
                            <a href="{{URL::to('/blog/'.$val->slug)}}">
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