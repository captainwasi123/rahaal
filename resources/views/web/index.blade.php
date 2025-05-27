@extends('web.includes.master')

@section('content')
	<main class="main">

	    <!-- Hero Section -->
	    <section id="hero" class="hero section">

	      <img src="{{URL::to('/public')}}/rahaal-bg-ai2.jpg" alt="" data-aos="fade-in">
	      <div class="bubble-block">
		      <div class='speech-bubble text-GamblerTown'>Every <span class="text-theme">journey</span> begins with a <span class="text-theme">wild</span> thought.</div>
		  </div>
	        <div class="row hero-content">
	          <div class="col-lg-12">
	          	<span class="text-white">Welcome to </span>
	            <h2 class="text-theme2 text-shadow text-thorn">Rahaal - The Explorer</h2>
	            <p class="text-shadow text-white home-para" style="max-width: 520px;">
	              I'm a travel filmmaker on a mission to explore the world, tell raw human stories, and uncover the unseen. Through my lens, I capture the soul of places and people—beyond tourist trails and curated views. From remote mountain villages to vibrant city backstreets, every journey is an opportunity to connect with authenticity, culture, and emotion.
	            </p>
	            <a href="https://www.youtube.com/@rahaal_01" target="_blank" class="btn-get-started text-secrets text-shadow"><i class="bi bi-youtube"></i> Watch My Journey</a>
	          </div>
	        </div>

	    </section><!-- /Hero Section -->

	    <!-- About Section -->
	    <section id="about" class="about section-padding section">

	      <div class="container" data-aos="fade-up" data-aos-delay="100">

	        <div class="row gy-4 justify-content-center">
	          <div class="col-lg-6">
	          	<div class="about-img-div box-shadow">
		            <img src="{{URL::to('/public/about.jpg')}}" class="img-fluid" alt="About me">
		        </div>
	          </div>
	          <div class="col-lg-6 content">
	            <a href="{{route('about')}}"><h2 class="text-thorn text-theme">About Me</h2></a>
	            <p>
		            <strong>Meet the Explorer Behind the Camera</strong>
		            <br>
					I'm <strong>Rahaal</strong>, a travel filmmaker and storyteller passionate about documenting the world’s raw beauty. Rahaal means <strong>“traveler”</strong> in Arabic/Urdu—a fitting name for a journey driven by curiosity and connection.
					<br>
					I believe travel is not about ticking boxes—it's about being present, learning from people, and embracing the unknown. Through my camera and my words, I aim to inspire others to explore beyond comfort zones and to see places with empathy and open eyes.
					<br><br>
					<strong>Get to know the person behind the lens.</strong>
					<br>
					Follow my journey on social media for daily updates and behind-the-scenes moments.
				</p>
	          </div>
	        </div>

	      </div>

	    </section><!-- /About Section -->

	     <!-- About Section -->
	    <section id="about" class="about section-bg section-padding section">

	      <div class="container" data-aos="fade-up" data-aos-delay="100">

	        <div class="row gy-4 justify-content-center">
	          	<div class="col-lg-12 text-center">
				  <a href="{{route('episodes')}}"><h2 class="text-thorn text-theme">Watch the latest episodes now</h2></a>
				  <p>
				  	Real Stories. Unfiltered Journeys. Visually Told.
					<br>
					Each episode is more than just a travel vlog—it's a cinematic story blending raw landscapes, local characters, and immersive experiences.
					<br>
					<strong>Leave a comment</strong> and share your thoughts—I’d love to hear from you.

				  </p>
				</div>

				<div class="col-lg-12">
					<div class="playlist-data blog-portrait-card row">
                        @foreach($episodes as $ep)
                          <div class="col-lg-3">
                            <a href="{{$ep->visit_link}}" target="_blank">
                              <div class="popular-card blog-card-2 flex-grow-1">
                                <div class="card-image">
                                  <img src="{{URL::to('public/storage/episodes/'.$ep->image)}}" alt="{{$ep->img_alt}}">
                                </div>
                                <div class="popular-text">
                                  <h6 class="mt-2 mmb-5">{{$ep->title}}</h6>
                                  <small>by <font class="text-theme2">{{@$ep->user->fullname}}</font> - <font class="text-bold">{{date('d-M-Y', strtotime($ep->created_at))}}</font></small>
                                </div>
                              </div>
                            </a>
                          </div>
                        @endforeach
                     </div>
				</div>
	        </div>

	      </div>

	    </section><!-- /About Section -->

	     <!-- About Section -->
	    <section id="about" class="about section-padding section">

	      <div class="container" data-aos="fade-up" data-aos-delay="100">

	        <div class="row gy-4 justify-content-center">
	          	<div class="col-lg-12 text-center">
				  <a href="{{route('blogs')}}"><h2 class="text-thorn text-theme">Browse the latest travel blogs</h2></a>
				  <p>
				  	Travel Guides, Adventure Tips & Insider Knowledge
					<br>
					My blog is your resource for planning unforgettable journeys. Find detailed travel guides to Northern Pakistan, hidden locations, tips for budget adventuring, gear reviews, and storytelling insights from my filming expeditions.

				  </p>
				</div>

				@foreach($blogs as $val)
				    <div class="col-lg-3 mt-0">
				      <a href="{{URL::to('/blog/'.$val->slug)}}">
				        <div class="blog-portrait-card box-shadow">
				          
				          <div class="popular-card blog-card-2 flex-grow-1">
				            <div class="card-image">
				              <img src="{{URL::to('public/storage/blogs/'.$val->banner)}}" alt="{{$val->banner_alt}}">
				            </div>
				            <div class="popular-text padding-h-6">
				              <h6 class="mt-2">{{$val->heading}}</h6>
				              <p class="line-break-3">{{$val->short_description}}</p>
				              <small>by <font class="text-theme2">{{@$val->author->name}}</font> - <font class="text-bold">{{date('M d, Y', strtotime($val->created_at))}}</font></small>
				            </div>
				          </div>
				        </div>
				      </a>
				    </div>
				@endforeach
	        </div>

	      </div>

	    </section><!-- /About Section -->

	    @include('web.includes.elements.youtube-statistics')

	    
	    @include('web.includes.elements.lets-connect')
	</main>
@endsection