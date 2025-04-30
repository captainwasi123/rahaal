@extends('web.includes.master')

@section('content')
	<main class="main">

	    <!-- About Section -->
	    <section id="about" class="about section">

	      <!-- Section Title -->
	      <div class="container section-title" data-aos="fade-up">
	        <h2>About Me</h2>
	        <p>
	        	See the world through my lens.<br>
	        	I’m <strong class="text-theme">Rahaal — The Explorer</strong>, storyteller, and content creator who doesn’t just visit places but uncovers the people and stories behind them. From survival challenges in the wild to luxury experiences in Dubai, and heartwarming stories of resilience — my journey is all about capturing raw, real moments.
	        </p>
	      </div><!-- End Section Title -->

	      <div class="container" data-aos="fade-up" data-aos-delay="100">

	        <div class="row gy-4 justify-content-center">
	          <div class="col-lg-4">
	            <img src="{{URL::to('/public/about.jpg')}}" class="img-fluid" alt="">
	          </div>
	          <div class="col-lg-8 content">
	            <h2>Who I Am</h2>
	            <p class="py-3">
	              <strong class="fst-italic">Survivalist | Traveler | Human Stories Specialist</strong><Br>
	              Each episode brings a new adventure, a new challenge, and a new perspective. I don’t just explore landscapes, I explore emotions, culture, and purpose.
	            </p>
	            <div class="row">
	              <div class="col-lg-8">
	                <ul>
	                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>20 Nov 1994</span></li>
	                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <a href="www.rahaal-theexplorer.com"><span>www.rahaal-theexplorer.com</span></a></li>
	                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <a href="mailto:contact@rahaal-theexplorer.com"><span>contact@rahaal-theexplorer.com</span></a></li>
	                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Dubai (Originally from Pakistan)</span></li>
	                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance/Collabs:</strong> <span>Open to brand partnerships & creative collaborations</span></li>
	                </ul>
	              </div>
	            </div>
	            <br>
	            <h2>My Mission</h2>
	            <p class="py-3">
	              To document powerful, inspiring stories that go beyond the surface — content that not only entertains but makes people think, feel, and act.<br>
				<i><strong>"I want to inspire others to explore — not just the world, but themselves."</strong></i>
	            </p>
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