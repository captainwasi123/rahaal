@extends('web.includes.master')

@section('content')
  <main class="main">

      <!-- About Section -->
      <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <div class="blog-header">
                <img src="{{URL::to('public/storage/blogs/'.$data->banner)}}" alt="{{$data->banner_alt}}">
                <div class="blog-header-overlay"></div>
            </div>
            <div class="blog-author">
                <span>{{date('M d, Y', strtotime($data->created_at))}}</span>
                <div>
                    <img src="{{URL::to('public/dragon-avatar.jpg')}}">
                </div>
                <span>{{$data->author->name}}</span>
            </div>

            <div class="blog-heading">
                
                <h1 class="text-thorn">{{$data->heading}}</h1>
              </div>
        </div><!-- End Section Title -->

      </section><!-- /About Section -->

      <!-- About Section -->
      <section id="about" class="about section collab-section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row g-3">

            <div class="col-lg-9">
              <div class="blog-content">
                  {!! $data->description !!}
              </div>
            </div>

            <div class="col-lg-3 d-flex flex-column gap-3">
              <div class="blog-aside">
                
                @include('web.includes.elements.aside')

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