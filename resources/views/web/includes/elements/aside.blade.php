<div class="social-follow">
  <div>
    <a href="https://www.youtube.com/@rahaal_01" target="_blank">
      <span class="bi bi-youtube"></span>
      <div class="text">
        12000 +
        <small>Fans</small>
      </div>
    </a>
    <a href="https://www.instagram.com/rahaal_01" target="_blank">
      <span class="bi bi-instagram"></span>
      <div class="text">
        135 +
        <small>Fans</small>
      </div>
    </a>
  </div>
  <div>
    <a href="https://www.facebook.com/rahaal01" target="_blank">
      <span class="bi bi-facebook"></span>
      <div class="text">
        800 +
        <small>Fans</small>
      </div>
    </a>
    <a href="https://www.tiktok.com/@rahaal_01" target="_blank">
      <span class="bi bi-tiktok"></span>
      <div class="text">
        2600 +
        <small>Fans</small>
      </div>
    </a>
  </div>
</div>



<div class="aside-ad">
  <div class="ad-item">
    <img src="{{URL::to('public/your_ad_here.png')}}">
  </div>
</div>

<div class="popular-section blog-cat">
  <h5 class="text-thorn">Playlists</h5>
  <ul>
    @foreach($all_playlists as $val)
      @if(count($val->episodes) > 0)
        <li><a href="{{$val->visit_link}}">{{$val->title}} <small>({{count($val->episodes)}})</small></a></li>
      @endif
    @endforeach
  </ul>

</div>


<div class="aside-ad">
  <div class="ad-item">
    <img src="{{URL::to('public/your_ad_here.png')}}">
  </div>
</div>


<div class="popular-section">
  <h5 class="text-thorn">Popular Series</h5>
  @foreach($popular_series->episodes as $val)
    <a href="{{$val->visit_link}}" target="_blank">
      <div class="popular-card blog-card-2 flex-grow-1">
        <img src="{{URL::to('public/storage/episodes/'.$val->image)}}" alt="{{$val->img_alt}}">
        <div class="popular-text">
          <h6 class="mt-2">{{$val->title}}</h6>
          <small>by <font class="text-theme2">{{$val->user->fullname}}</font> - <font class="text-bold">{{date('M d, Y', strtotime($val->created_at))}}</font></small>
        </div>
      </div>
    </a>
  @endforeach

</div>


<div class="aside-ad">
  <div class="ad-item">
    <img src="{{URL::to('public/your_ad_here.png')}}">
  </div>
</div>

<div class="popular-section blog-cat">
  <h5 class="text-thorn">Categories</h5>
  <ul>
    @foreach($blog_categories as $val)
      @if(count($val->blogs) > 0)
        <li><a href="{{URL::to('/blogs/'.$val->slug)}}">{{$val->name}} <small>({{count($val->blogs)}})</small></a></li>
      @endif
    @endforeach
  </ul>

</div>
