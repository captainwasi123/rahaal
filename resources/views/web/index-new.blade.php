@extends('web.includes.master')
@section('metaAddition')

@endsection

@section('addStyle')
	<style>
		.header{
			background-color: transparent;
			padding: 15px 35px;
			box-shadow: none;
		}
		.hero{
			min-height: 101vh;
			margin-top: -89px;
		}
		.navmenu a, .navmenu a:focus{
			color: #fff;
		}
		.navmenu li:hover>a, .navmenu .active, .navmenu .active:focus {
        border-bottom: 1px solid #ffffff;
    }
    .hero-main-content h2 {
		    background-color: #ffffff40;
		    color: #83c341 !important;
		    position: relative;
		    width: fit-content;
		    margin: auto;
		    margin-top: -80px;
		    font-size: 42px;
		    padding: 1px 18px;
		    border-radius: 7px;
		}
		.hero-main-content img{
			animation: pop 4s ease-in-out infinite;
		}

		.brand-logo-white{
		    display: block;
		}		
		.brand-logo-dark{
		    display: none;
		}
		.header-search {
		    background-color: transparent;
		    color: #fff;
		    border-color: #fff !important;
		    font-size: 16px !important;
		}

		.dark-header.header{
			background-color: #e9e8e6;
			box-shadow: 0px 0 18px rgba(0, 0, 0, 0.1);
		}
		.dark-header .navmenu a, .dark-header .navmenu a:focus{
			color: #444444;
		}
		.dark-header .brand-logo-white{
		    display: none;
		}		
		.dark-header .brand-logo-dark{
		    display: block;
		}
		.dark-header .header-search {
		    color: #444444;
		    border-color: #444444 !important;
		}
		.about-section{
			background-image: url('{{URL::to("/public/assets/img/about/bg.png")}}');
			background-size: cover;
			background-position: bottom;
		}
		.mobile-nav-toggle{
			color: #fff;
		}

		.dark-header .mobile-nav-toggle{
			color: #444444;
		}
		@media (max-width: 780px) {
			.header{
				padding: 15px 0 !important;
			}
			.hero-main-content img {
			    width: 70%;
			}
			.hero-main-content h2{
				    color: #83c341 !important;
				    margin-top: -50px;
    				font-size: 32px;
			}
			.hero-main-content p {
			    color: #fff !important;
			    margin-top: 30px;
			    margin-bottom: -60px;
			}

			.hero{
				min-height: 104vh;
			}
			h2.text-wild-trails{
				font-size: 18px;
			}
			.navmenu a, .navmenu a:focus {
			    color: #000000;
			}
			.header-search {
			    color: transparent;
			    border: none !important;
			}
			.header-search i {
			    color: #ffffff;
			}
			.dark-header .header-search i {
			    color: #444444;
			}
			.header-search span {
			    display: none;
			}
			.about-support a{
				padding: 8px 16px;
			}
		}
	</style>
@endsection

@section('content')
	<main class="main">

	    <!-- Hero Section -->
	    <section id="hero" class="hero section">

	      <img src="{{URL::to('/public')}}/assets/img/bg.jpg" class="hero-background" alt="" data-aos="fade-in">
	      <img src="{{URL::to('/public')}}/assets/img/hero-forground.png" class="hero-background" alt="" data-aos="fade-in">
	        
	      <div class="row hero-main-content">
	      	<div class="col-lg-12 text-center">
	      		<img src="{{URL::to('/public')}}/assets/img/hero-picture.png" width="420px" alt="" >
	      		<h2 class="text-theme2 text-shadow text-thorn text-center">Rahaal - The Explorer</h2>

	            <p class="text-shadow text-white home-para text-center" style="max-width: 720px;">
	              I’m a travel filmmaker capturing raw human stories and the soul of places—beyond tourist trails, with authenticity and emotion.
	            </p>
	            <a href="https://www.youtube.com/@rahaal_01" target="_blank" class="btn-get-started text-secrets text-shadow text-center"><i class="bi bi-youtube"></i> Watch My Journey</a>
	      	</div>
	      </div>

	        <!-- <div class="row hero-content">
	          <div class="col-lg-12">
	          	<span class="text-white">Welcome to </span>
	            <h2 class="text-theme2 text-shadow text-thorn">Rahaal - The Explorer</h2>
	            <p class="text-shadow text-white home-para" style="max-width: 520px;">
	              I'm a travel filmmaker on a mission to explore the world, tell raw human stories, and uncover the unseen. Through my lens, I capture the soul of places and people—beyond tourist trails and curated views. From remote mountain villages to vibrant city backstreets, every journey is an opportunity to connect with authenticity, culture, and emotion.
	            </p>
	            <a href="https://www.youtube.com/@rahaal_01" target="_blank" class="btn-get-started text-secrets text-shadow"><i class="bi bi-youtube"></i> Watch My Journey</a>
	          </div>
	        </div> -->

	    </section><!-- /Hero Section -->

	    <!-- About Section -->
	    <section id="about" class="about section-padding section about-section">

	      <div class="container" data-aos="fade-up" data-aos-delay="100">

	        <div class="row gy-4 justify-content-center">
	          
	          <div class="col-lg-7 content content-end">
            	<h2 class="text-wild-trails text-wood text-shadow">ABOUT RAHAAL</h2>
            	<br>
	            <div>
								I'm <strong>Rahaal</strong>, a travel filmmaker and storyteller passionate about documenting the world’s raw beauty. Rahaal means <strong>“traveler”</strong> in Arabic/Urdu—a fitting name for a journey driven by curiosity and connection.
								<br><br>
								I believe travel is not about ticking boxes—it's about being present, learning from people, and embracing the unknown. Through my camera and my words, I aim to inspire others to explore beyond comfort zones and to see places with empathy and open eyes.
								<div class="flex about-support">
									<a href="{{route('collaborate')}}" target="_blank">
										<i class="bi bi-hand-thumbs-up"></i> Collaboration
									</a>
									<a href="https://www.paypal.com/paypalme/rahaal01" target="_blank">
										<i class="bi bi-paypal"></i> Support via Paypal
									</a>
								</div>
								<strong>Get to know the person behind the lens.</strong>
								<br>
								Follow my journey on social media for daily updates and behind-the-scenes moments.
								<br><br><br>
							</div>
	          </div>
	          <div class="col-lg-5">
		            <img src="{{URL::to('/public/assets/img/about/pic.png')}}" width="100%" alt="About me">
	          	
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

@section('addScript')
	<script>
		$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();

	     //>=, not <=
	    if (scroll >= 500) {
	        //clearHeader, not clearheader - caps H
	        $("#header").addClass("dark-header");
	    }else if(scroll < 500){
	        $("#header").removeClass("dark-header");
	    }
	});
	</script>
@endsection