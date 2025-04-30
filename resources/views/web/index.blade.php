@extends('web.includes.master')

@section('content')
	<main class="main">

	    <!-- Hero Section -->
	    <section id="hero" class="hero section">

	      <img src="{{URL::to('/public')}}/rahaal-bg3.jpg" alt="" data-aos="fade-in">

	      <div class="container" data-aos="zoom-out" data-aos-delay="100">
	        <div class="row">
	          <div class="col-lg-8">
	            <h2 class="text-theme2 text-shadow text-GamblerTown">Rahaal - The Explorer</h2>
	            <p class="text-shadow text-white">
	              I'm a <span class="text-theme2 text-bold text-italic">travel filmmaker</span> on a mission to <span class="text-theme text-bold text-italic">explore the world</span>, <br>
	              tell raw human stories and <br>
	              uncover the unseen.
	            </p>
	            <a href="https://www.youtube.com/@rahaal_01" target="_blank" class="btn-get-started text-secrets text-shadow"><i class="bi bi-youtube"></i> Watch My Journey</a>
	          </div>
	        </div>
	      </div>

	    </section><!-- /Hero Section -->

	</main>
@endsection