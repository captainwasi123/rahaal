<!-- Page Title -->
  <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('/public/assets/img/title/'.$titleImg)}}');">
    <div class="container">
      <h1>{{$title}}</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li class="current">{{$title}}</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->