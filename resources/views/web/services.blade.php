@extends('web.includes.master')

@section('content')

	<main class="main">

	    @include('web.includes.subheader')

	    <!-- Services Section -->
	    <section id="services" class="services section">

	      <!-- Section Title -->
	      <div class="container section-title" data-aos="fade-up">
	        <h2 class="text-theme">Our Services</h2>
	        <p class="service-p">Elevate Your Brand Visibility and Boost Sales</p>
	      </div><!-- End Section Title -->

	      <div class="container">

	        <div class="row service-row gy-4">

	        	@foreach($services as $val)
		          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
		            <div class="icon flex-shrink-0"><i class="{{$val->icon}}" style="color: #f44d46;"></i></div>
		            <div>
		              <h4 class="title">{{$val->name}}</h4>
		              <p class="description">{{$val->description}}</p>
		              <a href="{{URL::to('/'.$val->slug)}}" class="readmore stretched-link"><i class="bi bi-arrow-right"></i></a>
		            </div>
		          </div>
		          <!-- End Service Item -->
	          	@endforeach
	          
	        </div>

	      </div>

	    </section><!-- /Services Section -->


	    <!-- Call To Action Section -->
	    <section id="call-to-action" class="call-to-action clientele-section section dark-background">

	      <img src="{{URL::to('/public')}}/assets/img/clientele.jpg" alt="">

	      <div class="hero-spacing"></div>
	      <div class="container">
	      	<div class="sub-section">
		        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
		          <div class="col-xl-10">
		            <div class="text-center">
		              <h3>Clientele</h3>
		              <hr>
		              <p>We’ve helped these brands achieve their goals and see how we can do the same for you.</p>
		            </div>
		          </div>
		        </div>
		    </div>
	      </div>

	    </section><!-- /Call To Action Section -->

	    @include('web.includes.elements.clients')

	</main>


@endsection