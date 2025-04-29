@extends('web.includes.master')
@section('addStyle')
	<style type="text/css">
		.hero .blockquote {
		  color: #fff;
		  padding-left: 20px;
		  border-left: 2px solid #e04a43;
		  margin: 14px 0;
		}
		.hero-title-sec h1 {
		    font-family: system-ui !important;
		}
			@media (max-width: 767px) {
			    .hero-title-sec h1 {
			        font-size: 42px;
			        line-height: 52px;
			    }
			}
	</style>
@endsection
@section('content')

	<main class="main">

	    <!-- Hero Section -->
	    <section id="hero" class="hero section dark-background">

	      <img src="{{URL::to('/public')}}/assets/img/background/banner.jpeg" class="hero-img-bg" alt="Hero Image" loading="lazy">

	      <div class="container">
	        <div class="row">
	          <div class="col-xl-1 hide-mobile">
	          	<p class="hero-title">DataMySite</p>
	          </div>
	          <div class="col-xl-4">
	          	<div class="hero-img">
		          	<img src="{{URL::to('/public')}}/assets/img/background/banner2.png" alt="DataMySite - Dubai UAE" loading="lazy">
		          </div>
	          </div>
	          <div class="col-xl-5 hero-title-sec">
	          	<div class="hero-spacing"></div>
	          	<h6 class="text-theme text-bold">D M S</h6>
	            <h1>The New Level For Advertising</h1>
	            <br>
	            <p class="blockquote">People do not buy goods and services.</p>
	            <p class="blockquote">They buy relations, stories, and magic.</p>

	          </div>
	        </div>
	      </div>

	    </section><!-- /Hero Section -->



	    <!-- Services Section -->
	    <section class="home-business">

	      <div class="container">

	        <div class="row gy-4">

	          <div class="col-lg-3 business-first">
	            <div>
	              <h5 class="text-theme">BEST SOLUTIONS</h5>
	              <h2 class="text-bold-700" style="font-size:40px">For Your Business</h2>
	            </div>
	          </div>
	          <!-- End Service Item -->

	          <div class="col-lg-3 business-item">
	          	<a href="{{URL::to('/outdoor-advertising/billboards-advertising')}}">
		          	<img src="{{URL::to('/public/assets/img/service/1.png')}}" alt="Billboards Advertising dubai uae" loading="lazy">
		          	<p class="business-title">Billboards Advertising</p>
		          	<p class="main-service-desc">Billboards dominate outdoor advertising with their commanding presence in high-traffic areas.</p>
		          </a>
	           
	          </div><!-- End Service Item -->

	          <div class="col-lg-3 business-item"  >
	          	<a href="{{URL::to('/influencer-marketing')}}">
		          	<img src="{{URL::to('/public/assets/img/service/2.png')}}" alt="Influencer Marketing dubai uae" loading="lazy">
		          	<p class="business-title">Influencer Marketing</p>
		          	<p class="main-service-desc">Access 4,500+ influencers across the GCC to boost your brand and drive targeted engagement.</p>
		          </a>
	           
	          </div><!-- End Service Item -->

	          <div class="col-lg-3 business-item"  >
	          	<a href="{{URL::to('/public-relations-pr-coverage')}}">
		          	<img src="{{URL::to('/public/assets/img/service/3.png')}}" alt="PR Coverage dubai uae" loading="lazy">
		          	<p class="business-title">PR Coverage</p>
		          	<p class="main-service-desc">Elevate your brand’s presence with TOP PR Media houses internationally that secure high-impact media placements and amplify your message.</p>
		          </a>
	           
	          </div><!-- End Service Item -->

	        </div>

	      </div>

	    </section><!-- /Services Section -->

	     <!-- Service Cards Section -->
	    <section id="service-cards" class="section-striped service-cards section">

	      <!-- Section Title -->
	      <div class="container section-title">
	        <h3 class="text-theme">What We Do</h3>
	        <p class="service-tp">We provide <strong>outdoor advertising</strong>, DOOH, PR Coverage, <strong>influencer marketing</strong>, <strong>event marketing</strong>, <strong>transit media</strong>, and more to elevate your brand’s impact and drive success. Let’s craft the perfect strategy together!</p>
	      </div><!-- End Section Title -->

	      <div class="container">

	        <div class="row gy-4 first-row">

	          <div class="col-lg-6"  >
	          	<div class="row">
	          		<div class="col-lg-4 col-sm-6 col-xs-6">
			            <div class="box-circle">
					      <div class="circle-border red-background" data-color1="#fff" data-color2="#f44d46" style="background-color: rgb(244, 77, 70); background-image: linear-gradient(223.2deg, transparent 50%, rgb(244, 77, 70) 50%), linear-gradient(90deg, rgb(255, 255, 255) 50%, transparent 50%);"> 
					        <div class="circle-percentage">
					          <span class="percentage" data-percentage="87">87%</span>
					        </div>
					      </div>
					    </div>
					    <p class="wwd-para">Digital Media Buying</p>
	          		</div>

	          		<div class="col-lg-4 col-sm-6 col-xs-6">
			            <div class="box-circle">
					      <div class="circle-border red-background" data-color1="#fff" data-color2="#f44d46" style="background-color: rgb(244, 77, 70); background-image: linear-gradient(255.6deg, transparent 50%, rgb(244, 77, 70) 50%), linear-gradient(90deg, rgb(255, 255, 255) 50%, transparent 50%);">
					        <div class="circle-percentage">
					          <span class="percentage" data-percentage="96">96%</span>
					        </div>
					      </div>
					    </div>
					    <p class="wwd-para">OOH Media Buying</p>
	          		</div>

	          		<div class="col-lg-4 col-sm-6 col-xs-6 service-card-last">
			            <div class="box-circle">
					      <div class="circle-border red-background" data-color1="#fff" data-color2="#f44d46" style="background-color: rgb(244, 77, 70); background-image: linear-gradient(198deg, transparent 50%, rgb(244, 77, 70) 50%), linear-gradient(90deg, rgb(255, 255, 255) 50%, transparent 50%);">
					        <div class="circle-percentage">
					          <span class="percentage" data-percentage="80">80%</span>
					        </div>
					      </div>
					    </div>
					    <p class="wwd-para">Strategic planning</p>
	          		</div>
	          	</div>
	          </div><!-- End Card Item -->

	          <div class="col-lg-6 mob-text-center"  >
	            <span class="text-theme">DataMySite</span>
	            <h2 class="text-bold-700">Marketing Solutions for Your Business's Growth</h2>
	          </div><!-- End Card Item -->

	        </div>

	      </div>

	    </section><!-- /Service Cards Section -->


	    
	    <!-- Services Section -->
	    <section id="services" class="services section">

	      <!-- Section Title -->
	      <div class="container section-title">
	        <h2 class="text-theme">Our Services</h2>
	        <p class="service-p">Elevate Your Brand Visibility and Boost Sales</p>
	        <p class="service-tp">
	        	We use services like <strong>outdoor advertising</strong>, <strong>CGI advertising</strong> and more to maximize your brand’s visibility and impact. Let's craft a strategy to drive your business success!
	        </p>
	      </div><!-- End Section Title -->

	      <div class="container">

	        <div class="row service-row gy-4">

	        	@foreach($header_services as $val)
		          <div class="col-lg-4 col-md-6 service-item d-flex"  >
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


	    <div class="section-striped">
				@include('web.includes.elements.clients')
			</div>

	     <!-- Service Cards Section -->
	    <section id="service-cards" class="service-cards section">
	    	<!-- Section Title -->
	      <div class="container section-title">
	        <h2 class="text-theme">Our Successful Projects</h2>
	        <p class="service-tp">
	        	At <strong>DataMySite</strong>, we deliver impactful marketing campaigns across <strong>billboards ads</strong>, DOOH, influencer marketing, PR Coverage, <strong>lead generation</strong>, <strong>event marketing</strong>, and <strong>sponsorships</strong>, driving real business success and measurable results. 
						<br>
						Let's make your brand our next success! 

	        </p>
	      </div><!-- End Section Title -->
	      <div class="container">

	        <div class="row">
          		<div class="col-lg-3 col-sm-6 col-xs-6">
		            <div class="counter-container">
		            	<div>
							      <div class="counter">1219</div>
							      <div><label>+</label></div>
							    </div>
						      <span>Succesful Project</span>
						    </div>
          		</div>

          		<div class="col-lg-3 col-sm-6 col-xs-6">
		            <div class="counter-container">
		            	<div>
							      <div class="counter">15</div>
							      <div><label>+</label></div>
							    </div>
						      <span>Years Experience</span>
						    </div>
          		</div>

          		<div class="col-lg-3 col-sm-6 col-xs-6">
		            <div class="counter-container">
		            	<div>
							      <div class="counter">5</div>
							      <div><label>+</label></div>
							    </div>
						      <span>Winning Awards</span>
						    </div>
          		</div>

          		<div class="col-lg-3 col-sm-6 col-xs-6">
		            <div class="counter-container">
		            	<div>
							      <div class="counter">81</div>
							      <div><label>+</label></div>
							    </div>
						      <span>Satisfied Clients</span>
						    </div>
          		</div>
          	</div>

	      </div>

	    </section><!-- /Service Cards Section -->

	 

	    <!-- Call To Action Section -->
	    <section id="call-to-action" class="call-to-action section dark-background">

	      <img src="{{URL::to('/public')}}/assets/img/background/call-to.jpg" alt="Call to action background">

	      <div class="container">
	        <div class="row justify-content-center">
	          <div class="col-xl-10">
	          	<div class="hero-spacing hide-mobile"></div>
	            <div class="text-center">
	              <p class="text-theme" style="text-transform: uppercase;">Schedule Your Appointment Today</p>
	              <h3>Don't Miss Out on This Opportunity to <br>Elevate Your Advertising Game</h3>
	              <br>
	              <p><span class="text-theme">Smarter Marketing, Better Outcomes.</span>
					<br>Boost your brand’s visibility, enhance campaign performance</p>
	              <a class="cta-btn" href="{{route('contact')}}">Contact Us</a>
	            </div>
	          	<div class="hero-spacing hide-mobile"></div>
	          </div>
	        </div>
	      </div>

	    </section><!-- /Call To Action Section -->

	</main>


@endsection