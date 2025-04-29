@extends('web.includes.master')

@section('content')
    <script>
      window.gtmCustomPage = "blog-page";
    </script>
	<main class="main">

	    <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('/public/storage/blogs/'.$data->banner)}}');">
            <div class="container">
              <h1>{{$data->heading}}</h1>
              <nav class="breadcrumbs">
                <ol>
                  <li><a href="{{route('home')}}">Home</a></li>
                  <li><a href="{{route('blogs')}}">Blogs</a></li>
                  <li class="current">{{$data->heading}}</li>
                </ol>
              </nav>
            </div>
          </div><!-- End Page Title -->

	    <section id="service-cards" class="blog-section blog-page section">

	      <div class="container">

	        <div class="row gy-4 first-row">

	          <div class="col-lg-9" data-aos="fade-up" data-aos-delay="100">
                <div class="post-footer">
                </div>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/storage/blogs/'.$data->banner)}}" alt="{{$data->banner_alt}}">
                    <div class="detail-post-summary">
                        <p class="summary">
                            <strong>Summary</strong>:<br>
                            {{ $data->short_description }}
                        </p>
                        <p class="author"><i class="bi bi-person"></i> {{$data->author->name}} </p>
                        <p class="date"><i class="bi bi-calendar2-week"></i> &nbsp;{{date('F d, Y', strtotime($data->created_at))}}</p>
                    </div>
                </div>
                <br>
	          	<div class="post-container">
                    {!! $data->description !!}
                </div>
                <div class="blog-tags">
                    <span>Tags: </span>
                    @foreach($data->tags as $val)
                        @if(!empty($val->data->slug))
                            <a href="{{URL::to('/tag/'.@$val->data->slug)}}">
                                <span>{{$val->tag}}</span>
                            </a>
                        @endif
                    @endforeach
                </div>
                <div class="blog-share">
                    <div class="blog-share-content">
                        <p><i class="fa fa-share"></i> Share:</p>

                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ URL::current() }}" target="_blank" aria-label="Linkedin" class="share-linkedin">
                            <i class="bi bi-linkedin"></i> <span>Linkedin</span>
                        </a>

                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ URL::current() }}&amp;src=sdkpreparse" target="_blank" data-href="https://developers.facebook.com/docs/plugins/" data-layout="" data-size="" class="share-facebook">
                            <i class="bi bi-facebook"></i> <span>Facebook</span>
                        </a>

                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(URL::current()) }}&text={{ urlencode($data->heading) }}" target="_blank" aria-label="twitter" class="share-twitter">
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

            <div class="col-lg-3 aside-block" data-aos="fade-up" data-aos-delay="100">
            </div>

	      </div>

	    </section>
        <br>
        <section id="service-cards" class="blog-section section">

          <div class="container">
            <h2>Related Articles</h2>
            <div class="post-container">
                <div class="row gy-4 first-row">
                    @foreach($related as $val)
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                          <div class="post row">
                            <div class="col-lg-12">
                                <div class="post-image">
                                    <img src="{{URL::to('public/storage/blogs/'.$val->banner)}}" alt="{{$val->banner_alt}}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <br>
                                <h2 class="related-blog-heading">{{$val->heading}}</h2>
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
                        </div>  
                  @endforeach
                </div>
            </div>

        </section>

	</main>

    
@endsection