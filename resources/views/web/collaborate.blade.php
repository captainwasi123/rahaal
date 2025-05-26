@extends('web.includes.master')

@section('content')
	<main class="main">
	    <!-- About Section -->
	    <section id="about" class="about section">

	      <!-- Section Title -->
	      <div class="container section-title" data-aos="fade-up">
	        <h2>Collaborate</h2>
	        <p>
	        	Partner With Rahaal – Let’s Tell Stories Together
	        	<br>
				I collaborate with tourism boards, travel brands, NGOs, content platforms, and filmmakers to create impactful visual stories. From promotional films to documentary-style episodes, I bring a filmmaker’s eye and a storyteller’s heart to every project.
				
				If you're looking to showcase a destination, launch an experience, or tell a meaningful story—let’s connect and create something powerful.
				
				<strong>Reach out to discuss a collaboration.</strong>
				View my portfolio of past work and visual storytelling.
	        	
	        </p>
	      </div><!-- End Section Title -->

	      <div class="container" data-aos="fade-up" data-aos-delay="100">

	        <div class="row gy-4 justify-content-center">
	          <div class="col-lg-6">
	          	<img src="{{URL::to('/public')}}/about.jpg" class="collab-img" alt="">
	          </div>
	          <div class="col-lg-6 content">
	          	<h2>Why Collaborate With Us?</h2>
		        <p>
		        	Let’s Create Stories That Matter — Stories That Connect, Inspire, and Leave a Lasting Impact.	        	
		        </p>
	          	<p>
		            We’re not just about views—we’re about impact. Whether it's showcasing hidden gems, supporting inspiring individuals, or capturing untold adventures, our content connects with real people. Partnering with us means becoming part of stories that inspire, educate, and uplift audiences across the globe. Let’s build something unforgettable—together.
	          	</p>
	            <h3>Highlights:</h3>
	            <ul class="collab-li">
					<li>100K+ monthly impressions</li>
					<li>Engaged, loyal audience base</li>
					<li>Collaborations with local businesses, causes, and brands</li>
					<li>Tailored storytelling for your message</li>
				</ul>
	          </div>
	        </div>

	      </div>

	    </section><!-- /About Section -->

	    <!-- Stats Section -->
	    <section id="stats" class="stats section section-bg">

	      <div class="container" data-aos="fade-up" data-aos-delay="100">

	        <div class="row gy-4 justify-content-center">
	          <div class="col-lg-6 content">
	          	<h2>Ways We Can Work Together</h2>
		        <p>
		        	Your Brand, Our Platform — Together, Let’s Tell Stories That Resonate, Reach, and Inspire.	        	
		        </p>
	          	<p>
		            We offer creative, strategic partnerships designed to fit your brand’s unique identity and goals. Whether you’re a growing business, a mission-driven nonprofit, or a fellow content creator, we believe in crafting collaborations that feel authentic and impactful. Our approach goes beyond promotion — we focus on building meaningful narratives that connect with real audiences. Together, we can co-create content that not only drives engagement but also tells a story your audience will remember. From product integrations to adventure-based campaigns, we’re here to bring your vision to life — one powerful story at a time.
	          	</p>
	            <h3>Opportunities:</h3>
	            <ul class="collab-li">
					<li>Brand Sponsorships: Integrated brand storytelling in YouTube videos</li>
					<li>Product Features & Reviews: Honest, immersive showcases</li>
					<li>Adventure-Based Campaigns: Outdoor, travel, or survival-themed partnerships</li>
					<li>Guest Appearances: Be part of the journey on-screen</li>
					<li>Social Media Shoutouts: Boost your visibility across platforms</li>
				</ul>
	          </div>
	          <div class="col-lg-6">
	          	<img src="{{URL::to('/public')}}/about.jpg" class="collab-img2" alt="">
	          </div>
	        </div>

	      </div>

	    </section><!-- /Stats Section -->

	   	@include('web.includes.elements.youtube-statistics')

	    @include('web.includes.elements.lets-connect')

	  </main>
@endsection