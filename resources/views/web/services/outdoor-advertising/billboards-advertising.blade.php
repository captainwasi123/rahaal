@extends('web.includes.master')

@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service/'.$subservice->slug.'.png')}}');">
            <div class="container">
              <h1>{{$subservice->name}}</h1>
              <nav class="breadcrumbs">
                <ol>
                  <li><a href="{{route('home')}}">Home</a></li>
                  <li><a href="{{route('services')}}">Services</a></li>
                  <li><a href="{{URL::to('/'.$service->slug)}}">{{$service->name}}</a></li>
                  <li class="current">{{$subservice->name}}</li>
                </ol>
              </nav>
            </div>
          </div><!-- End Page Title -->

        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4 first-row">

              <div class="col-lg-9" data-aos="fade-up" data-aos-delay="100">
                <h2 class="post-title">About Billboards Advertising</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$subservice->slug.'.png')}}" alt="{{$subservice->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    <h4>Transform Your Brand Presence with Billboards Advertising Dubai</h4>
                    <p>Your brand message should stand tall above Dubai's bustling streets and highways. Through strategic billboard advertising Dubai, you can broadcast your message to millions of potential customers daily. We at DataMySite can turn your brand presence to a newer height with our customised billboard advertising solutions.</p>
                    <h4>Billboard Advertising Solutions – Beyond Old-School Marketing</h4>
                    <p>Digital billboards UAE brings your marketing vision to life. Your advertisements shine bright on premium displays – drawing attention from business leaders and consumers across the emirate.<br>
                    Static and digital displays work in perfect sync to build your brand recognition. These massive marketing platforms turn heads and hold attention, creating lasting impressions that stick with viewers long after they pass by. With our advertising solutions, we focus on these key essentials</p>

                    <h4>Location Excellence </h4>
                    <p>Our billboard advertising campaign starts with selecting prime spots that match your goals. Business districts buzz with corporate decision-makers, while retail zones capture consumer attention at key shopping moments.</p>
                    <h4>Smart Technology Meets Marketing Innovation</h4>
                    <p>Our digital billboards UAE solutions include advanced display capabilities with precise targeting. You can adjust your message throughout the day. Real-time updates keep your campaigns fresh and relevant. <br>
                    High-impact billboard campaigns UAE deliver measurable results for your marketing investment. We monitor daily views, peak exposure times, and audience engagement patterns through detailed analytics.</p>
                    <h4>Billboard Marketing Services Dubai – Top Ways We Benefit You with Our Advertising Solutions</h4>
                    <p>Your billboard advertising investment includes full-service campaign management. We guide you from initial planning through design, placement, and performance tracking. Digital billboards deliver tangible benefits for your brand –</p>
                    <h4>Constant Visibility – 24/7 (A Round the Clock Solution)</h4>
                    <p>Billboards maintain a continuous presence, unlike digital ads, which can be skipped, or social media posts, which get buried. Your advertisement remains in sight – whether it's rush-hour traffic or late-night travel.</p> 
                    <h4>Targets both Commuters & Pedestrians</h4>
                    <p>Billboards are placed in high-traffic areas that capture drivers' attention. It lets your brand engage with a diverse audience – from daily commuters to shoppers. Billboards (unlike online ads that rely on user engagement) can naturally attract attention.</p>
                    <h4>Builds Long-Term Brand Recall</h4>
                    <p>Repetition is key to brand recognition – and billboards offer consistent exposure. People who see the same ad multiple times develop familiarity with the brand. It makes it simpler for them to recall information while making a purchase. Billboards (whether it's a catchy slogan, a memorable image, or a bold logo) can create lasting impressions.<br>
                    Your message reaches viewers twenty-four hours a day. Repeated exposure builds strong brand recall. Premium locations demonstrate market leadership. Wide reach connects with diverse audience segments.</p>

                    <h4>Your Path to Marketing Success</h4>
                    <p>Billboard advertising Dubai puts your brand message where it matters most. From busy highways to premium retail locations, your advertisements command attention and drive results.<br>
                    Let our team show you how digital billboards can transform your marketing impact. Book your consultation today and discover the perfect locations for your campaign.</p>
                    <h4>Start Your Success Story with us at DataMySite</h4>
                    <p>Launch your billboards advertising Dubai campaign today. Consult our team to explore premium locations and custom solutions that match your marketing goals. <br><br>
                    Contact us at <strong>+971 525 287 259</strong>, or <br>
                    You may mail us at <a href="mailto:contact@datamysite.com"><strong>contact@datamysite.com</strong></a>. <br>
                    We are located at Al Bayan Building, Dubai Investment Park, Dubai – UAE. So, you can plan for a visit to seek a consultation in a personalised manner. </p>

                    <br><br>
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>How are billboard locations chosen?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Your billboard location matches your specific marketing goals through data-driven analysis. We examine each site's traffic counts, viewer demographics, and visibility duration. Our team evaluates driving patterns, speed zones, and viewing angles to pick spots with maximum impact.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>Can digital billboards display video ads?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Digital billboards support rich content (including motion graphics, animations, and dynamic messaging). You can schedule different creative content throughout the day. Our LED displays maintain crystal-clear visibility in all lighting conditions, ensuring your dynamic content captures attention.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>

            <div class="col-lg-3 aside-block" data-aos="fade-up" data-aos-delay="100">
            </div>

          </div>

        </section>

    </main>


@endsection