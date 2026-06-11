@extends('web.includes.master')

@section('content')
  <main class="main">

      <!-- About Section -->
      <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h1>Watch the latest episodes now</h1>
            <h5>Welcome to the official video library of <strong>Rahaal – The Explorer!</strong></h5>
            <p>
                I`m Rahaal—a travel filmmaker and storyteller driven by a passion for capturing the world’s raw beauty. My name means “traveler” in Arabic and Urdu, and that’s exactly how I approach every journey: with an open heart, a curious eye, and a camera ready to immortalize moments that matter.

                <br><br>
            </p>
            <div class="blog-header">
                <img src="{{URL::to('public/youtube-cover.jpg')}}" >
                <div class="blog-header-overlay"></div>
            </div>
            <div class="episode-author">
                <div>
                    <img src="{{URL::to('public/yt-dp.jpg')}}">
                </div>
                <div>
                    <h4>Rahaal - The Explorer</h4>
                    <a href="">Youtube Channel <i class="bi bi-box-arrow-up-right"></i></a>
                </div>
            </div>
        </div><!-- End Section Title -->

      </section><!-- /About Section -->

      <!-- About Section -->
      <section id="about" class="about section collab-section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row g-3">

            <div class="col-lg-9">
              @foreach($playlists as $val)
                @if(count($val->episodes) !== 0)
                  @php $s = 1; @endphp
                  <div class="episode-playlist">
                      <div class="playlist-heading">
                          <a href="{{route('episodes.playlist', $val->slug)}}"><h3 class="text-thorn">{{$val->title}}</h3></a>
                          <a href="{{$val->visit_link}}">Open on Youtube  <i class="bi bi-box-arrow-up-right"></i></a>
                      </div>
                      <br>
                      <div class="playlist-data blog-portrait-card row">
                        @foreach($val->episodes_desc as $ep)
                          @if($s <= 6)
                          <div class="col-lg-4">
                            <a href="{{$ep->visit_link}}" target="_blank">
                              <div class="popular-card blog-card-2 flex-grow-1">
                                <div class="card-image">
                                  <img src="{{URL::to('public/storage/episodes/'.$ep->image)}}" alt="{{$val->img_alt}}">
                                </div>
                                <div class="popular-text">
                                  <h6 class="mt-2 mmb-5">{{$ep->title}}</h6>
                                  <small>by <font class="text-theme2">{{@$ep->user->fullname}}</font> - <font class="text-bold">{{date('d-M-Y', strtotime($ep->created_at))}}</font></small>
                                </div>
                              </div>
                            </a>
                          </div>
                          @php $s++; @endphp
                          @endif
                        @endforeach
                      </div>
                      <br>
                      <img class="ending-line" src="{{URL::to('public/ending-line.png')}}">
                  </div>
                @endif
              @endforeach
              <p class="text-center">
                <br>
                <strong>Leave a comment</strong> and share your thoughts—I’d love to hear from you.
              </p>

              <div class="blog-content">
                <p class="MsoNormal">
                    <strong>What Can You Discover Here?</strong><o:p></o:p>
                </p>
                <p class="MsoNormal">
                    This page houses our complete lineup of YouTube episodes—adventures that span the soaring mountains of Northern Pakistan to the futuristic skylines of Dubai. Whether you're after breathtaking landscapes, cultural immersion, or off-the-beaten-track travel tips, each video promises:<o:p></o:p>
                </p>
                <ul>
                    <li style="margin-top:0in;" type="disc">
                        <strong>Authentic storytelling</strong> — I let locations and people speak for themselves, no scripts, no spin.<o:p></o:p>
                    </li>
                    <li style="margin-top:0in;" type="disc">
                        <strong>Cinematic visuals</strong> — Filmed in 4K with aerial drone shots for that sweeping “wow” effect.<o:p></o:p>
                    </li>
                    <li style="margin-top:0in;" type="disc">
                        <strong>Hidden gems &amp; insider tips</strong> — From apple orchards in Hunza to secret souks in Old Dubai.<o:p></o:p>
                    </li>
                    <li style="margin-top:0in;" type="disc">
                        <strong>Nature-first focus</strong> — Mountain trails, forest serenity, desert dunes, and beyond.<o:p></o:p>
                    </li>
                    <li style="margin-top:0in;" type="disc">
                        <strong>Cultural connection</strong> — Local hospitality, age-old traditions, and stories behind the places.<o:p></o:p>
                    </li>
                </ul>
                <hr>
                <p class="MsoNormal">
                    <strong>Featured Series</strong><o:p></o:p>
                </p>
                <p class="MsoNormal">
                    <span style="font-family:&quot;Segoe UI Emoji&quot;,sans-serif;"><span style="mso-bidi-font-family:&quot;Segoe UI Emoji&quot;;"><strong>🇵🇰</strong></span></span><strong> Northern Pakistan Series</strong><o:p></o:p>
                </p>
                <p class="MsoNormal">
                    Journey through Hunza, Skardu, Fairy Meadows, and Swat. Explore ancient forts, glacier-fed lakes, cultural festivals, and high-altitude treks—all in unforgettable episodes.<o:p></o:p>
                </p>
                <p class="MsoNormal">
                    <span style="font-family:&quot;Segoe UI Emoji&quot;,sans-serif;"><span style="mso-bidi-font-family:&quot;Segoe UI Emoji&quot;;"><strong>🇦🇪</strong></span></span><strong> Dubai &amp; UAE Adventures</strong><o:p></o:p>
                </p>
                <p class="MsoNormal">
                    Discover iconic experiences—from dune safaris and helicopter tours to Old Dubai’s spice markets and serene desert escapes.<o:p></o:p>
                </p>
                <p class="MsoNormal">
                    <strong>Nature &amp; Wildlife Specials</strong><o:p></o:p>
                </p>
                <p class="MsoNormal">
                    Uncover hidden waterfalls, forest trails, high-altitude lakes, and the untouched side of the world’s most scenic regions.<o:p></o:p>
                </p>
                <hr>
                <p class="MsoNormal">
                    <strong>Latest Episodes — Dive In!</strong><o:p></o:p>
                </p>
                <ul>
                    <li style="margin-top:0in;" type="disc">
                        <strong>“Exploring Kumrat Valley”</strong> – A visual retreat into pristine rivers and alpine meadows.<o:p></o:p>
                    </li>
                    <li style="margin-top:0in;" type="disc">
                        <strong>“Hidden Lakes of Hunza”</strong> – Trekking to crystal-clear lakes most travelers overlook.<o:p></o:p>
                    </li>
                    <li style="margin-top:0in;" type="disc">
                        <strong>“Old Dubai Street Food Tour”</strong> – Authentic bites in Al Fahidi, where every meal tells a story.<o:p></o:p>
                    </li>
                    <li style="margin-top:0in;" type="disc">
                        <strong>“Desert Dunes &amp; Starry Nights”</strong> – Campfires and camel rides under the Arabian sky.<o:p></o:p>
                    </li>
                </ul>
                <p class="MsoNormal">
                    Subscribe on YouTube to receive new episodes every week—fresh stories, fresh scenery!<o:p></o:p>
                </p>
                <hr>
                <p class="MsoNormal">
                    <strong>Viewer Love</strong><o:p></o:p>
                </p>
                <p class="MsoNormal">
                    “Your episodes are emotional stories of connection, not just travel vlogs.”
                    <br>
                    — Awais S., Islamabad<o:p></o:p>
                </p>
                <p class="MsoNormal">
                    “Thank you for showing Dubai’s quieter side. It’s beautiful and peaceful!”
                    <br>
                    — Fatima R., Abu Dhabi<o:p></o:p>
                </p>
                <p class="MsoNormal">
                    “The Northern Pakistan series made me fall in love with my own country all over again.”
                    <br>
                    — Bilal M., Lahore<o:p></o:p>
                </p>
                <p class="MsoNormal">
                    These heartfelt messages keep me filming, exploring, and chronicling journeys—big or small—with sincerity and soul.<o:p></o:p>
                </p>
                <hr>
                <p class="MsoNormal">
                    <strong>Stay in the Loop</strong><o:p></o:p>
                </p>
                <ul>
                    <li style="margin-top:0in;" type="disc">
                        <strong>YouTube</strong>: <a href="https://www.youtube.com/@rahaal_01" target="_new">@Rahaal - The Explorer</a> – Subscribe for global travel stories<o:p></o:p>
                    </li>
                    <li style="margin-top:0in;" type="disc">
                        <strong>Instagram</strong>: <a href="https://www.instagram.com/rahaal_01" target="_new">@Rahaal - The Explorer</a> – Behind-the-scenes and daily updates<o:p></o:p>
                    </li>
                    <li style="margin-top:0in;" type="disc">
                        <strong>Newsletter &amp; Blog</strong>: Read travel insights, gear reviews, and destination guides on my website.<o:p></o:p>
                    </li>
                </ul>
                <p class="MsoNormal">
                    Have a destination in mind? Want me to film a place close to your heart? Visit our Contact page or leave a comment on the videos.<o:p></o:p>
                </p>
                <hr>
                <p class="MsoNormal">
                    <strong>Ready to Explore?</strong><o:p></o:p>
                </p>
                <p class="MsoNormal">
                    Browse through our episodes below—filter by region, theme, or mood. Hit <strong>Play</strong>, and let the journey begin.<o:p></o:p>
                </p>
                <p class="MsoNormal">
                    Whether you're planning your next trip or traveling vicariously, I promise you'll feel the heart of every place—and maybe spark the urge to pack your bags.<o:p></o:p>
                </p>
                <p class="MsoNormal">
                    Scroll down to watch, comment, and share your favorite moments!<o:p></o:p>
                </p>
              </div>
              
              <div class="row g-3 mt-4">
                @include('web.includes.elements.topStories')
              </div>
            </div>

            <div class="col-lg-3 d-flex flex-column gap-3">
              <div class="blog-aside">
                
                @include('web.includes.elements.aside')
                
              </div>
            </div>
          </div>


          <div class="row g-3 mt-4">
            @include('web.includes.elements.v-ad')
          </div>
        </div>

      </section><!-- /About Section -->
      <br>
    </main>
@endsection