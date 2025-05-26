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
	            <h2>Who I Am</h2>
	            <p class="py-3">
	              <strong class="fst-italic">Survivalist | Traveler | Human Stories Specialist</strong><Br>
	              Each episode brings a new adventure, a new challenge, and a new perspective. I don’t just explore landscapes, I explore emotions, culture, and purpose.
	            </p>
	            <img class="ending-line" src="{{URL::to('public/ending-line.png')}}">
	            <h2>My Mission</h2>
	            <p class="py-3">
	              To document powerful, inspiring stories that go beyond the surface — content that not only entertains but makes people think, feel, and act.<br>
				<i><strong>"I want to inspire others to explore — not just the world, but themselves."</strong></i>
	            </p>
	          </div>
	        </div>

	      </div>

	    </section><!-- /About Section -->
	</main>
@endsection