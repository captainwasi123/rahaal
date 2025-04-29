@extends('web.includes.master')
@section('metaAddition')
@if(!empty($tags))
<meta name="robots" content="noindex, follow">
@endif
@endsection
@section('content')

	<main class="main">

	    <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('/public/assets/img/title/'.$titleImg)}}');">
            <div class="container">
              <h1>{{$title}} {{@$page}}</h1>
              <nav class="breadcrumbs">
                <ol>
                  <li><a href="{{route('home')}}">Home</a></li>
                  @if(!empty($type))
                  <li><a href="{{route('blogs')}}">Blogs</a></li>
                  @endif
                  <li class="current">{{$title}}</li>
                </ol>
              </nav>
            </div>
          </div><!-- End Page Title -->

	    <section id="service-cards" class="blog-section section">

	      <div class="container">

	        <div class="row gy-4 first-row">

	          <div class="col-lg-9" data-aos="fade-up" data-aos-delay="100">
	          	<div class="post-container">
                    @foreach($data as $val)
                      <div class="post row">
                        <div class="col-lg-4">
                            <div class="post-image">
                                <a href="{{route('blogs.detail', [$val->slug])}}" target="_blank"><img src="{{URL::to('public/storage/blogs/'.$val->banner)}}" alt="{{$val->banner_alt}}"></a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <a href="{{route('blogs.detail', [$val->slug])}}" target="_blank"><h4>{{$val->heading}}</h4></a>
                            <p class="date">Published On - {{date('F d, Y', strtotime($val->created_at))}}</p>
                            <div class="post-content">
                              <p>{{$val->short_description}}</p> 

                            </div>
                            <div class="post-footer">
                                <p ><i class="bi bi-person"></i> {{$val->author->name}} </p>
                                <a href="{{route('blogs.detail', [$val->slug])}}" target="_blank">► Read More</a>
                            </div>
                        </div>
                      </div>
                      <hr />
                  @endforeach

                  {!! $data->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>  
	        </div>

            <div class="col-lg-3 aside-block" data-aos="fade-up" data-aos-delay="100">
                
            </div>

	      </div>

	    </section>

	</main>


@endsection