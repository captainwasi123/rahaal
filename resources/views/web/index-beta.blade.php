@extends('web.includes.master')
@section('content')

	<main class="main">

	    <!-- Hero Section -->
	    <section id="hero" class="new-hero dark-background" >
	    	<div class="hero-background" style="background-image:url('{{URL::to('/public/assets/img/background/banner.jpeg')}}');">
	    	</div>
	      <div class="hero-content container  text-left">
	      	<h1 data-aos="fade-up" data-aos-delay="100">The <font class="text-theme">New</font> Level For <font class="text-theme">Advertising</font></h1>
	      	<p data-aos="fade-up" data-aos-delay="100">Transform your brand’s visibility with cutting-edge advertising solutions that drive success and innovation.</p>
	       	<div class="hero-grid" data-aos="fade-up" data-aos-delay="100">
	       		@foreach($services as $val)
	       		<div class="hero-item">
	          	<img src="{{URL::to('public/assets/img/service/'.$val->slug).'.png'}}" alt="{{$val->img_alt}}">
	          	<div class="hero-item-text">
	          		<i class="hero-item-icon {{$val->icon}}"></i>
		          	<p class="hero-item-title">{{$val->name}}</p>
		          	<p class="hero-item-desc">{{$val->description}}</p>
		          	<a href="{{URL::to('/'.$val->slug)}}" class="hero-item-link">Read More →</a>
		          </div>
	       		</div>
	       		@endforeach

	       	</div>
	       	<br><br>
	       	<br><br>
	      </div>

	    </section><!-- /Hero Section -->




	     <!-- Service Cards Section -->
	    <section id="service-cards" class="service-cards marketing-section section">

	      <div class="container sec-section">

	        <div class="row gy-4 first-row">

	          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
	          	<div class="row">
	          		<div class="col-lg-4 col-sm-6 col-xs-6">
			            <div class="box-circle">
					      <div class="circle-border red-background" data-color1="#fff" data-color2="#f44d46">
					        <div class="circle-percentage">
					          <span class="percentage" data-percentage="87"></span>
					        </div>
					      </div>
					    </div>
					    <p>Digital Media Buying</p>
	          		</div>

	          		<div class="col-lg-4 col-sm-6 col-xs-6">
			            <div class="box-circle">
					      <div class="circle-border red-background" data-color1="#fff" data-color2="#f44d46">
					        <div class="circle-percentage">
					          <span class="percentage" data-percentage="96"></span>
					        </div>
					      </div>
					    </div>
					    <p>OOH Media Buying</p>
	          		</div>

	          		<div class="col-lg-4 col-sm-6 col-xs-6 service-card-last">
			            <div class="box-circle">
					      <div class="circle-border red-background" data-color1="#fff" data-color2="#f44d46">
					        <div class="circle-percentage">
					          <span class="percentage" data-percentage="80"></span>
					        </div>
					      </div>
					    </div>
					    <p>Strategic planning</p>
	          		</div>
	          	</div>
	          </div><!-- End Card Item -->

	          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
	            <span class="text-theme">WHAT WE DO</span>
	            <h2>Marketing Solutions for Your Business's Growth</h2>
	          </div><!-- End Card Item -->

	        </div>

	      </div>

	    </section><!-- /Service Cards Section -->


		@include('web.includes.elements.clients')


	     <!-- Service Cards Section -->
	    <section id="service-cards" class="service-cards section">

	      <div class="container">

	        <div class="row">
          		<div class="col-lg-3 col-sm-6 col-xs-6">
		            <div class="counter-container">
				      <div class="counter" data-target="1219"></div><label>+</label>
				      <span>Succesfull Project</span>
				    </div>
          		</div>

          		<div class="col-lg-3 col-sm-6 col-xs-6">
		            <div class="counter-container">
				      <div class="counter" data-target="15"></div><label>+</label>
				      <span>Years Experience</span>
				    </div>
          		</div>

          		<div class="col-lg-3 col-sm-6 col-xs-6">
		            <div class="counter-container">
				      <div class="counter" data-target="5"></div><label>+</label>
				      <span>Winning Awards</span>
				    </div>
          		</div>

          		<div class="col-lg-3 col-sm-6 col-xs-6">
		            <div class="counter-container">
				      <div class="counter" data-target="81"></div><label>+</label>
				      <span>Satisfied Clients</span>
				    </div>
          		</div>
          	</div>

	      </div>

	    </section><!-- /Service Cards Section -->

	    
	    
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
	              <a href="{{URL::to('/'.$val->slug)}}" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
	            </div>
	          </div>
	          <!-- End Service Item -->
          @endforeach
          
        </div>

      </div>

    </section><!-- /Services Section -->


	    <!-- Call To Action Section -->
	    <section id="call-to-action" class="call-to-action section dark-background">

	      <img src="{{URL::to('/public')}}/assets/img/background/call-to.jpg" alt="Call to action background">

	      <div class="container">
	        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
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