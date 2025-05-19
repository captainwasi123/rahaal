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
              <div class="featured-card blog-card-2 flex-grow-1" style="background-image: url('{{URL::to('public/storage/blogs/'.$featured[0]->blog->banner)}}');">
                <a href="{{URL::to('/'.$featured[0]->blog->slug)}}">
                  <div class="featured-overlay">
                    <h6 class="mt-2">{{$featured[0]->blog->heading}}</h6>
                    <small>by <font class="text-theme2">{{$featured[0]->blog->author->name}}</font> - <font class="text-white text-bold">Jun 19, 2020</font></small>
                  </div>
                </a>
              </div>
              <div class="featured-card blog-card-2 flex-grow-1" style="background-image: url('{{URL::to('public/storage/blogs/'.$featured[1]->blog->banner)}}');">
                <a href="{{URL::to('/'.$featured[1]->blog->slug)}}">
                  <div class="featured-overlay">
                    <h6 class="mt-2">{{$featured[1]->blog->heading}}</h6>
                    <small>by <font class="text-theme2">{{$featured[1]->blog->author->name}}</font> - <font class="text-white text-bold">Jun 19, 2020</font></small>
                  </div>
                </a>
              </div>
          </div>
            
          <div class="col-lg-8">
            <div class="featured-card blog-card-1" style="background-image: url('{{URL::to('public/storage/blogs/'.$featured[2]->blog->banner)}}');">
                <a href="{{URL::to('/'.$featured[2]->blog->slug)}}">
                  <div class="featured-overlay">
                    <h4 class="mt-2">{{$featured[2]->blog->heading}}</h4>
                    <small>by <font class="text-theme2">{{$featured[2]->blog->author->name}}</font> - <font class="text-white text-bold">Jun 19, 2020</font></small>
                  </div>
                </a>
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