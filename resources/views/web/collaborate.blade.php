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

	    <!-- Stats Section -->
	    <section id="stats" class="stats section section-bg">

	      <!-- Section Title -->
	      <div class="container section-title" data-aos="fade-up">
	        <h2>Youtube Statistics</h2>
	        <p>Crafting Impactful Stories. Backed by Bold Numbers.</p>
	      </div><!-- End Section Title -->

	      <div class="container" data-aos="fade-up" data-aos-delay="100">

	        <div class="row gy-4">

	          <div class="col-lg-3 col-md-6">
	            <div class="stats-item text-center w-100 h-100">
	              <span>12K <small class="text-theme2">+</small></span>
	              <p>Subscribers</p>
	            </div>
	          </div><!-- End Stats Item -->

	          <div class="col-lg-3 col-md-6">
	            <div class="stats-item text-center w-100 h-100">
	              <span>352K <small class="text-theme2">+</small></span>
	              <p>Total Views</p>
	            </div>
	          </div><!-- End Stats Item -->


	          <div class="col-lg-3 col-md-6">
	            <div class="stats-item text-center w-100 h-100">
	              <span>12,000 <small class="text-theme2">+</small></span>
	              <p>Watch Hours</p>
	            </div>
	          </div><!-- End Stats Item -->

	          <div class="col-lg-3 col-md-6">
	            <div class="stats-item text-center w-100 h-100">
	              <span>30 <small class="text-theme2">+</small></span>
	              <p>Videos Uploaded</p>
	            </div>
	          </div><!-- End Stats Item -->

	        </div>

	      </div>

	    </section><!-- /Stats Section -->

	    <!-- Contact Section -->
	    <section id="contact" class="contact section">

	      <!-- Section Title -->
	      <div class="container section-title" data-aos="fade-up">
	        <h2>Let’s connect!</h2>
	        <p>Whether you want to collaborate, sponsor an adventure, or just say hi — I’d love to hear from you.</p>
	      </div><!-- End Section Title -->

	      <div class="container" data-aos="fade-up" data-aos-delay="100">

	        <div class="row gy-4">

	          <div class="col-lg-2">

	            
	          </div>

	          <div class="col-lg-8">
	            <form action="" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
	              <div class="row gy-4">

	                <div class="col-md-6">
	                  <label for="name-field" class="pb-2">Your Name</label>
	                  <input type="text" name="name" id="name-field" class="form-control" required="">
	                </div>

	                <div class="col-md-6">
	                  <label for="email-field" class="pb-2">Your Email</label>
	                  <input type="email" class="form-control" name="email" id="email-field" required="">
	                </div>

	                <div class="col-md-12">
	                  <label for="subject-field" class="pb-2">Subject</label>
	                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
	                </div>

	                <div class="col-md-12">
	                  <label for="message-field" class="pb-2">Message</label>
	                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
	                </div>

	                <div class="col-md-12 text-center">
	                  <div class="loading">Loading</div>
	                  <div class="error-message"></div>
	                  <div class="sent-message">Your message has been sent. Thank you!</div>

	                  <button type="submit">Send Message</button>
	                </div>

	              </div>
	            </form>
	          </div><!-- End Contact Form -->

	        </div>

	      </div>

	    </section><!-- /Contact Section -->

	  </main>
@endsection