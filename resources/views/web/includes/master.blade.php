<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{@$metaTags->title}}{{@$ametaTags['title']}}{{empty($metaTags->title) && empty($ametaTags['title']) ? env('APP_NAME') : ''}}</title>
  <meta name="description" content="{{@$metaTags->description}}{{@$ametaTags['description']}}">
  <meta name="keywords" content="{{@$metaTags->keywords}}{{@$ametaTags['keywords']}}">
  <meta name="host" content="{{URL::to('/')}}">
  @yield('metaAddition')
  <!-- Basic OG Tags -->
  <meta property="og:title" content="{{@$metaTags->title}}{{@$ametaTags['title']}}{{empty($metaTags->title) && empty($ametaTags['title']) ? env('APP_NAME') : ''}}" />
  <meta property="og:description" content="{{@$metaTags->description}}{{@$ametaTags['description']}}" />
  <meta property="og:url" content="{{@URL::current()}}" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Rahaal - The Explorer" />

  <!-- Image OG Tag -->
  <meta property="og:image" content="{{empty($og_img) ? URL::to('/public/youtube-cover.jpg') : $og_img}}" />
  <meta property="og:image:alt" content="Image - {{@$metaTags->title}}{{@$ametaTags['title']}}{{empty($metaTags->title) && empty($ametaTags['title']) ? env('APP_NAME') : ''}}" />
  <meta property="og:image:type" content="image/*" />
  <meta property="og:image:width" content="620" />
  <meta property="og:image:height" content="340" />


  <!-- Additional Tags for Social Platforms -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="{{@$metaTags->title}}{{@$ametaTags['title']}}{{empty($metaTags->title) && empty($ametaTags['title']) ? env('APP_NAME') : ''}}" />
  <meta name="twitter:description" content="{{@$metaTags->description}}{{@$ametaTags['description']}}" />
  <meta name="twitter:image" content="{{empty($og_img) ? URL::to('/public/youtube-cover.jpg') : $og_img}}" />
  <meta name="twitter:site" content="@RahaalTheExplorer" />

  <link rel="canonical" href="{{@URL::current()}}" />
  
  <!-- Favicons -->
  <link href="{{URL::to('/public')}}/efavicon.png" rel="icon">
  <link href="{{URL::to('/public')}}/efavicon.png" rel="apple-touch-icon">

  @include('web.includes.style')

  @foreach($headSnippet as $val)
    @if($val->position == 'Head')
      <!-- {{$val->name}} // Start -->
          {!! $val->snippet_code !!}
      <!-- {{$val->name}} // End -->
    @endif
  @endforeach
</head>

<body class="index-page">

  @include('web.includes.header')

  @yield('content')

  @include('web.includes.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <div id="searchmodal" class="modal fade modal-lg" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <input type="text" class="form-control form-control-lg" id="searchfield" placeholder="What you are looking for?" />
        </div>
        <div class="modal-body blog-card-body">
          <p class="text-bold">Top Rated Articles:</p>
          @foreach($top_stories as $key => $val)
            @if($key < 4)
              <a href="{{URL::to('/blog/'.$val->blog->slug)}}" target="_blank">
                <div class="popular-card blog-card-2 flex-grow-1">
                  <div class="card-image">
                    <img src="{{URL::to('public/storage/blogs/'.$val->blog->banner)}}" alt="{{$val->blog->banner_alt}}">
                  </div>
                  <div class="popular-text">
                    <h6 class="mt-2">{{$val->blog->heading}}</h6>
                    <p>{{$val->blog->short_description}}</p>
                    <small>by <font class="text-theme2">{{@$val->blog->author->name}}</font> - <font class="text-bold">{{date('d-M-Y', strtotime($val->blog->created_at))}}</font></small>
                  </div>
                </div>
              </a>
            @endif
          @endforeach
        </div>
      </div>

    </div>
  </div>

  <div id="newsletterModal" class="modal fade modal-lg" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <img src="{{URL::to('/public/newsletter.jpg')}}" width="100%" alt="Newsletter Image">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body blog-card-body">
          <h3 class="text-center text-theme text-thorn">Work With Rahaal</h3>
          <p class="text-center">Partner with us to advertise your brand or support our journey of real, human travel stories. Whether you’re a company looking to collaborate or an individual who believes in our mission — we’d love to hear from you.</p>
          <div class="row">
            <div class="col-lg-6 text-center">
              <h4 class=" text-theme text-bold"><i class="bi bi-person-hearts"></i> Advertise or Collaborate</h4>
              <p>
                Want to feature your brand on our website, YouTube, or social media?<br>
                Click below to submit your <strong>collaboration inquiry</strong>.
                <br>
              </p>
              <a href="{{route('collaborate')}}" target="_blank"><i class="bi bi-ui-checks"></i> Enquire Now</a>
            </div>
            <div class="col-lg-6 text-center">
              <h4 class=" text-theme text-bold"><i class="bi bi-envelope-heart"></i> Support the Journey</h4>
              <p>
                Believe in authentic travel content? Help me keep exploring and telling stories that matter.<br>
                You can <strong>contribute directly via PayPal</strong>.
                <br>
              </p>
              <a href="https://www.paypal.com/paypalme/rahaal01" target="_blank"><i class="bi bi-paypal"></i> Support via PayPal</a>
            </div>
          </div>
          <br>
          <h4 class="text-bold"><i class="bi bi-rocket-takeoff"></i> Let’s Make an Impact Together</h4>
          <p class="">Whether you're a brand looking for real visibility or a supporter of honest, human adventures — this is your chance to be part of something meaningful. Click below, take the first step, and let’s create something unforgettable.</p>
        </div>
      </div>

    </div>
  </div>

  <!-- Preloader -->
  <div id="preloader"></div>

  @foreach($bodySnippet as $val)
    @if($val->position == 'Body')
      <!-- {{$val->name}} // Start -->
          {!! $val->snippet_code !!}
      <!-- {{$val->name}} // End -->
    @endif
  @endforeach
  
  @include('web.includes.scripts')

</body>

</html>