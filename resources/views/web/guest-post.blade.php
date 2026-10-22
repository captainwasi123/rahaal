@extends('web.includes.master')

@section('content')
	<main class="main">

	    <!-- About Section -->
	    <section id="about" class="about section">

	      <!-- Section Title -->
	      <div class="container section-title pb-0" data-aos="fade-up">
	        <h1>Write for Us</h1>
	        <h4>Guest Guides on Rahaal – The Explorer</h4>
	        <p>
	        	I accept a small number of guest guides from travellers with first-hand experience of Pakistan, the UAE or nearby destinations.
	        </p>
	      </div><!-- End Section Title -->

	    </section><!-- /About Section -->



	    <!-- About Section -->
	    <section id="about" class="about ">

	      <div class="container pd-0 pt-0" data-aos="fade-up" data-aos-delay="100">

	        <div class="row">
	          <div class="col-lg-8 content">

	            <p>
	            	Rahaal – The Explorer is a travel site built on real trips: how to get there, what it costs, when to go and what to watch out for. If you have travelled somewhere I haven't covered yet, or know a place better than most, your guide can help other travellers plan their trip.
	            	<br>
	            	Contributing is free, and I accept up to one guide per contributor per month. Every guide is edited before it is published, and I may decline any submission that doesn't fit the site.
	            </p>
	          </div>
	          <div class="col-lg-4">
	          	<div class="guest-signin">
	          		<h5>Let’s Get Writing!</h5>
	          		<p class="text-center">Turn ideas into words. Easy, fun, and impactful writing starts here!</p>
	          		<div>
		          		<button class="btn sign-in-btn">Sign in</button>
		          		<button class="btn sign-up-btn">Sign up</button>
	          		</div>
	          	</div>
	          </div>
	        </div>

	      </div>

	    </section><!-- /About Section -->


	    <!-- About Section -->
	    <section id="about" class="about section">

	      <div class="container" data-aos="fade-up" data-aos-delay="100">

	        <div class="row">
	        	<div class="col-lg-4">
	        		<img src="{{URL::to('/public/assets/img/guest-posting/3.png')}}" width="100%" alt="Illustration of a traveller writing a guide">
	        	</div>
	          <div class="col-lg-8 content vertical-center">
	          	<h2 class="h4 text-thorn text-theme">Why Write for Rahaal – The Explorer?</h2>
	            <p>
	            	Writing a guide here is about sharing a trip that genuinely helps someone else. Here's what you get:
	            </p>
	            <ul>
	            	<li><strong>A byline and author bio</strong>: your name on the guide and a short bio with one link to your own site or profile.</li>
					<li><strong>Careful editing</strong>: I edit every guide for clarity and accuracy and send you the final version before it goes live.</li>
					<li><strong>Readers who are planning trips</strong>: people come here to plan journeys in Pakistan, the UAE and nearby, so practical guides get used.</li>
					<li><strong>No fees</strong>: contributing is free.</li>
	            </ul>
	          </div>
	        </div>

	      </div>

	    </section><!-- /About Section -->



	    <!-- About Section -->
	    <section id="about" class="about striped-section section">

	      <div class="container" data-aos="fade-up" data-aos-delay="100">

	        <div class="row">
	          <div class="col-lg-8 content vertical-center">
	          	<h2 class="h4 text-thorn text-theme">About Rahaal – The Explorer</h2>
	            <p>
	            	Rahaal – The Explorer is a travel site and YouTube channel by Rahaal, a Pakistani travel filmmaker based in Dubai. The guides cover mountains, lakes, cities and adventures, written from my own trips with real costs and photos.
	            	<br>
	            	The site focuses on:
	            </p>
	            <ul>
	            	<li>Northern Pakistan: valleys, lakes, treks and road trips</li>
					<li>Dubai and the UAE: day trips, outdoor spots and adventure activities</li>
					<li>Practical planning: routes, costs, seasons and visas for travellers from Pakistan and the Gulf</li>
					<li>Responsible travel and respect for local culture</li>
	            </ul>
	            <p>
	            	Read <a href="{{ url('/about-us') }}">how I write these guides</a> before you pitch. Guest guides follow the same standards.
	            </p>
	          </div>
	        	<div class="col-lg-4">
	        		<img src="{{URL::to('/public/assets/img/guest-posting/5.png')}}" width="100%" alt="Illustration of mountains and a lake">
	        	</div>
	        </div>

	      </div>

	    </section><!-- /About Section -->



	    <!-- About Section -->
	    <section id="about" class="about section">

	      <div class="container" data-aos="fade-up" data-aos-delay="100">

	        <div class="row">
	        	<div class="col-lg-4">
	        		<img src="{{URL::to('/public/assets/img/guest-posting/6.png')}}" width="100%" alt="Illustration of travellers sharing stories">
	        	</div>
	          <div class="col-lg-8 content vertical-center">
	          	<h2 class="h4 text-thorn text-theme">Who Can Contribute?</h2>
	            <p>
	            	You don't need to be a professional writer. You do need to have been there. Good contributors include:
	            </p>
	            <ul>
	            	<li>Travellers who have recently done a trip and kept track of costs and routes</li>
					<li>Trekkers, climbers and outdoor guides with local knowledge</li>
					<li>Photographers with their own photos and the story behind them</li>
					<li>People who live in a destination and know it beyond the usual spots</li>
	            </ul>
	          </div>
	        </div>

	      </div>

	    </section><!-- /About Section -->



	    <!-- About Section -->
	    <section id="about" class="about striped-section section">

	      <div class="container" data-aos="fade-up" data-aos-delay="100">

	        <div class="row">
	          <div class="col-lg-8 content vertical-center">
	          	<h2 class="h4 text-thorn text-theme">Guest Guide Guidelines</h2>
	            <p>
	            	Please read these before you pitch:
	            </p>
	            <ul>
	            	<li><strong>First-hand only</strong>: original, unpublished writing based on your own trip, with your own photos.</li>
					<li><strong>Practical details</strong>: how you got there, what it cost, when you went and what you'd do differently.</li>
					<li><strong>No AI-generated or spun content</strong>: guides must be written by you.</li>
					<li><strong>Links</strong>: one author bio link is allowed. Links in guest posts are marked nofollow or sponsored.</li>
					<li><strong>Not promotional</strong>: no paid placements, hidden ads or "best agency" lists.</li>
					<li><strong>Formatting</strong>: clear headings, short paragraphs, and a costs table if you can.</li>
					<li><strong>Language</strong>: English.</li>
					<li><strong>Editing</strong>: I edit every post and may decline any submission.</li>
	            </ul>
	          </div>
	        	<div class="col-lg-4">
	        		<img src="{{URL::to('/public/assets/img/guest-posting/4.png')}}" width="100%" alt="Illustration of a checklist for guest guides">
	        	</div>
	        </div>

	      </div>

	    </section><!-- /About Section -->



	    <!-- About Section -->
	    <section id="about" class="about section">

	      <div class="container" data-aos="fade-up" data-aos-delay="100">

	        <div class="row">
	        	<div class="col-lg-4">
	        		<img src="{{URL::to('/public/assets/img/guest-posting/7.png')}}" width="100%" alt="Illustration of a world map with travel pins">
	        	</div>
	          <div class="col-lg-8 content vertical-center">
	          	<h2 class="h4 text-thorn text-theme">Destinations I'm Looking For</h2>
	            <p>
	            	Guides on these places fit the site best:
	            </p>
	            <ul>
	            	<li><strong>Northern Pakistan</strong>: Gilgit-Baltistan, Swat, Kaghan, Chitral, Azad Kashmir and the Galiyat</li>
					<li><strong>UAE and Oman</strong>: hikes, wadis, desert trips and lesser-known spots</li>
					<li><strong>Trips from Pakistan and the Gulf</strong>: Turkey, Georgia, Azerbaijan, Central Asia, Malaysia and similar</li>
	            </ul>
	          </div>
	        </div>

	      </div>

	    </section><!-- /About Section -->


	    <!-- About Section -->
	    <section id="about" class="about striped-section section">

	      <div class="container" data-aos="fade-up" data-aos-delay="100">

	        <div class="row">
	          <div class="col-lg-8 content vertical-center">
	          	<h2 class="h4 text-thorn text-theme">Guide Ideas</h2>
	            <p>
	            	Some examples of guides I'd like to publish:
	            </p>
	            <ul>
	            	<li>A trek or hike you've done, with route, difficulty and costs</li>
					<li>A road trip itinerary with daily distances and stops</li>
					<li>A lesser-known valley, lake or village and how to reach it</li>
					<li>Budget travel: what a trip really cost, day by day</li>
					<li>Local food, festivals and traditions, explained by someone who was there</li>
					<li>Travelling with family, or solo, in a specific region</li>
	            </ul>
	          </div>
	        	<div class="col-lg-4">
	        		<img src="{{URL::to('/public/assets/img/guest-posting/1.png')}}" width="100%" alt="Illustration of a notebook with travel ideas">
	        	</div>
	        	<div class="col-lg-12">
	        		<h2 class="h4 text-thorn text-theme">How to Pitch</h2>
	        		<p>Please pitch before you write the full guide:</p>
	        		<ol>
	        			<li>Email <a href="mailto:contact@rahaal-theexplorer.com">contact@rahaal-theexplorer.com</a> with your topic and a 3-line outline.</li>
						<li>Include two links to your previous writing (a blog, Instagram captions or a published article are fine).</li>
						<li>If the idea fits, I'll reply with notes and a deadline.</li>
						<li>Send the finished guide with your own photos. I'll edit it and send you the final version before it goes live.</li>
	        		</ol>
	        	</div>
	        </div>

	      </div>

	    </section><!-- /About Section -->


	    <!-- About Section -->
	    <section id="about" class="about section">

	      <div class="container" data-aos="fade-up" data-aos-delay="100">

	        <div class="row">
	        	<div class="col-lg-4">
	        		<img src="{{URL::to('/public/assets/img/guest-posting/8.png')}}" width="100%" alt="Illustration of an editor reviewing an article">
	        	</div>
	          <div class="col-lg-8 content vertical-center">
	          	<h2 class="h4 text-thorn text-theme">What Happens After You Submit</h2>
	            <ul>
	            	<li><strong>Review</strong>: I read every pitch and reply within a few days.</li>
					<li><strong>Editing</strong>: I may shorten, restructure or fact-check your guide, and I'll check changes with you.</li>
					<li><strong>Credit</strong>: the guide is published under your name with your author bio.</li>
					<li><strong>Updates</strong>: if prices or rules change, I may update the guide later and note the date.</li>
	            </ul>
	          </div>
	        </div>

	      </div>

	    </section><!-- /About Section -->


	    <!-- About Section -->
	    <section id="about" class="about striped-section section">

	      <div class="container" data-aos="fade-up" data-aos-delay="100">

	        <div class="row">
	          <div class="col-lg-8 content vertical-center">
	          	<h2 class="h4 text-thorn text-theme">Ready to Share Your Trip?</h2>
	            <p>
	            	If you've been somewhere worth writing about and kept good notes, I'd love to hear from you.
	            	Email <a href="mailto:contact@rahaal-theexplorer.com">contact@rahaal-theexplorer.com</a> with your idea.
	            </p>
	          </div>
	        	<div class="col-lg-4">
	        		<img src="{{URL::to('/public/assets/img/guest-posting/2.png')}}" width="100%" alt="Illustration of a traveller with a backpack">
	        	</div>
	        </div>

	      </div>

	    </section><!-- /About Section -->



	    <!-- Stats Section -->
	    <section id="stats" class="stats section">

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

	  </main>
@endsection
