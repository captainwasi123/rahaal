@extends('web.includes.master')

@section('content')

	<main class="main">

	    @include('web.includes.subheader')

	    <section id="service-cards" class="about-section section">

	      <div class="container">

	        <div class="row gy-4 first-row">

	          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
	          	<p>
                    Founded in 2021 and based in Dubai, UAE, <strong>Datamysite</strong> is a premier marketing agency specializing in <strong>brand storytelling, experiential marketing</strong>, and <strong>strategic brand placement</strong>. We cut through the clutter of advertising to bring brands to life, ensuring they stand out in a competitive landscape.
                    <br><br>
                    Our expertise spans across:<br>
                    <strong>Celebrity Management & Influencers</strong> – Connecting brands with the right celebrities and influencers to amplify reach, enhance credibility, and drive engagement.
                    <br><br>  
                    <strong>PR & Media</strong> – Collaborating with top-tier media houses to craft compelling narratives and secure high-impact coverage.  
                    <br><br>
                    <strong>OOH Media Buying</strong> – Securing high-visibility placements in prime outdoor locations for greater brand exposure. 
                </p>
                <h3>Vision</h3>
                <p>
                    We strive to be the <strong>trusted growth partner</strong> that businesses rely on, serving as an <strong>extended arm to their marketing needs.</strong>
                </p>
                <h3>Mission</h3>
                <p>
                    To consistently craft <strong>innovative and impactful media solutions</strong> that resonate with our clients' needs, ensuring their brands stand out in a competitive landscape.
                </p>
	          </div><!-- End Card Item -->

	        </div>

	      </div>

	    </section>

        <section class="section" style="background-image:url('{{URL::to('public/assets/img/about-b.jpg')}}'); background-size: cover;">

          <div class="container working-container">

            <div class="row gy-4 first-row">

              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center"> 
                    <span class="text-theme">HOW WE WORK</span>
                    <h3 class="text-bold">Our Working Proccess</h3>
                </div>
                <div class="hide-mobile" style="height: 50px;"></div>
                <div class="row text-center">
                    <div class="col-lg-3 col-sm-6 col-xs-6">
                        <i class="bi bi-list-task" style="color: #cbcbcb;"></i>
                        <p class="working-title">Select Your Service</p>
                        <p>Helps us understand your needs and aligns our strategies with your business goals.</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-6">
                        <i class="bi bi-calendar4-week" style="color: #cbcbcb;"></i>
                        <p class="working-title">Booking & Confirm</p>
                        <p>We’ll finalize the details and set a timeline to kick off your customized marketing strategy.</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-6">
                        <i class="bi bi-credit-card" style="color: #cbcbcb;"></i>
                        <p class="working-title">Booking Payment</p>
                        <p>Ensures your service is reserved and allows us to start preparing for your campaign with full commitment.</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-6">
                        <i class="bi bi-graph-up-arrow" style="color: #cbcbcb;"></i>
                        <p class="working-title">Launch & Monitor</p>
                        <p>We launch your campaign and continuously track its performance</p>
                    </div>
                </div>
                <div class="hide-mobile" style="height: 50px;"></div>
                <p class="text-center">For more information, please call <strong>(+971) 42 957 001</strong></p>
              </div><!-- End Card Item -->

            </div>

          </div>

        </section>


        <section class="section">

          <div class="container">

            <div class="row gy-4 first-row">

              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100"> 
                    
                <div class="row">
                    <div class="col-lg-7">
                        <span class="text-theme">MAKE APPOINTMENT</span>
                        <h3 class="text-bold">Get Our Service Easily</h3>
                        <div class="hide-mobile" style="height: 50px;"></div>

                        @include('web.includes.elements.contact')
                    </div>
                    <div class="col-lg-5">
                        <br>
                        @include('web.includes.elements.contact-form')
                    </div>
                </div>
              </div><!-- End Card Item -->

            </div>

          </div>

        </section>

	</main>


@endsection