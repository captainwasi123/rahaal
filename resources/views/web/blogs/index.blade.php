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
          <h2>{{!empty($type) && $type == 'category' ? $title.' - ' : ''}}Blogs</h2>
          <p>
            Travel Guides, Adventure Tips & Insider Knowledge
            <br>
            My blog is your resource for planning unforgettable journeys. Find detailed travel guides to Northern Pakistan, hidden locations, tips for budget adventuring, gear reviews, and storytelling insights from my filming expeditions.
            
            Whether you're preparing your first trip to Hunza or want to know the real costs of traveling to Skardu—these blogs are crafted to help you travel smarter and deeper.

          </p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          @if(!empty($featured) && count($featured) > 0)
            <div class="row g-3">

              <div class="col-lg-4 d-flex flex-column gap-3">
                  <div class="featured-card blog-card-2 flex-grow-1" style="background-image: url('{{URL::to('public/storage/blogs/'.$featured[0]->blog->banner)}}');">
                    <a href="{{URL::to('/blog/'.$featured[0]->blog->slug)}}">
                      <div class="featured-overlay">
                        <h6 class="mt-2">{{$featured[0]->blog->heading}}</h6>
                        <small>by <font class="text-theme2">{{$featured[0]->blog->author->name}}</font> - <font class="text-white text-bold">Jun 19, 2020</font></small>
                      </div>
                    </a>
                  </div>
                  <div class="featured-card blog-card-2 flex-grow-1" style="background-image: url('{{URL::to('public/storage/blogs/'.$featured[1]->blog->banner)}}');">
                    <a href="{{URL::to('/blog/'.$featured[1]->blog->slug)}}">
                      <div class="featured-overlay">
                        <h6 class="mt-2">{{$featured[1]->blog->heading}}</h6>
                        <small>by <font class="text-theme2">{{$featured[1]->blog->author->name}}</font> - <font class="text-white text-bold">Jun 19, 2020</font></small>
                      </div>
                    </a>
                  </div>
              </div>
                
              <div class="col-lg-8">
                <div class="featured-card blog-card-1" style="background-image: url('{{URL::to('public/storage/blogs/'.$featured[2]->blog->banner)}}');">
                    <a href="{{URL::to('/blog/'.$featured[2]->blog->slug)}}">
                      <div class="featured-overlay">
                        <h4 class="mt-2">{{$featured[2]->blog->heading}}</h4>
                        <small>by <font class="text-theme2">{{$featured[2]->blog->author->name}}</font> - <font class="text-white text-bold">Jun 19, 2020</font></small>
                      </div>
                    </a>
                </div>
              </div>

            </div>
          @endif
        </div>

      </section><!-- /About Section -->

      <!-- About Section -->
      <section id="about" class="about section collab-section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row g-3">

            <div class="col-lg-9">
              <div class="blog-card">
                  <div class="blog-card-head">
                    <h2 class="text-thorn">Browse the latest travel blogs</h2>
                    <p>Search by destination or topic to find exactly what you need.</p>
                    <ul>
                      @foreach($categories as $val)
                        @if(count($val->blogs) > 0)
                          <li class="{{!empty($type) && $type == 'category' && $title == $val->name ? 'active' : ''}}"><a href="{{URL::to('/blogs/'.$val->slug)}}">{{$val->name}} <small>({{count($val->blogs)}})</small></a></li>
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
                      <div class="col-lg-12 blog-pagination">
                        <br>
                        {!! $data->withQueryString()->links('pagination::bootstrap-5') !!}
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