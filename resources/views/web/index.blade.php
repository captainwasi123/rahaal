@extends('web.includes.master')

@section('content')
	<main class="main">

	    <!-- Hero Section -->
	    <section id="hero" class="hero section">

	      <img src="{{URL::to('/public')}}/rahaal-bg3.jpg" alt="" data-aos="fade-in">
	      <div class="bubble-block">
		      <div class='speech-bubble text-GamblerTown'>Every <span class="text-theme">journey</span> begins with a <span class="text-theme">wild</span> thought.</div>
		  </div>
	        <div class="row hero-content">
	          <div class="col-lg-12">
	            <h2 class="text-theme2 text-shadow text-thorn">Rahaal - The Explorer</h2>
	            <p class="text-shadow text-white">
	              I'm a <span class="theme-badge">travel filmmaker</span> on a mission to <span class="theme-badge">explore the world</span>, <br>
	              tell raw <span class="theme-badge2">human stories</span> and uncover <br>
	              the unseen.
	            </p>
	            <a href="https://www.youtube.com/@rahaal_01" target="_blank" class="btn-get-started text-secrets text-shadow"><i class="bi bi-youtube"></i> Watch My Journey</a>
	          </div>
	        </div>

	    </section><!-- /Hero Section -->

	</main>
@endsection