@extends('web.includes.master')

@section('content')
	<main class="main">

	    <!-- Disclaimer Section -->
	    <section id="disclaimer" class="about section">

	      <!-- Section Title -->
	      <div class="container section-title" data-aos="fade-up">
	        <h1>Disclaimer and Disclosure</h1>
	        <p>Last updated: 22 October 2026</p>
	      </div><!-- End Section Title -->

	      <div class="container" data-aos="fade-up" data-aos-delay="100">
	        <div class="row gy-4 justify-content-center">
	          <div class="col-lg-10 content">

	            <h2>General</h2>
	            <p>
	              The information on this site is for general travel information only. It reflects my personal experience
	              and is not professional, legal, visa, medical or financial advice.
	            </p>

	            <h2>Prices, visas and safety</h2>
	            <p>
	              Prices, schedules, visa rules and road conditions change often. Each guide shows the date it was last
	              updated. Check official government, airline and operator websites before you book or travel.
	            </p>

	            <h2>Collaborations</h2>
	            <p>
	              Some posts may be collaborations with brands, hotels or tour operators. Sponsored posts are clearly
	              labelled at the top. My opinions are my own and I only recommend what I have used or would use myself.
	            </p>

	            {{-- Uncomment if you start using affiliate links --}}
	            {{--
	            <h2>Affiliate links</h2>
	            <p>Some links may be affiliate links that pay me a small commission at no extra cost to you.</p>
	            --}}

	            {{-- Uncomment once AdSense is approved and ads are live --}}
	            {{--
	            <h2>Advertising</h2>
	            <p>This site shows ads served by Google AdSense. Ads do not mean I endorse the advertiser.</p>
	            --}}

	            <h2>Questions</h2>
	            <p>
	              Spotted something out of date? Email
	              <a href="mailto:contact@rahaal-theexplorer.com">contact@rahaal-theexplorer.com</a> and I'll fix it.
	              See also the <a href="{{ url('/privacy-policy') }}">Privacy Policy</a> and
	              <a href="{{ url('/terms') }}">Terms of Use</a>.
	            </p>

	          </div>
	        </div>
	      </div>

	    </section><!-- /Disclaimer Section -->

	  </main>
@endsection
