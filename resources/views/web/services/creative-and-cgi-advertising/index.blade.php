@extends('web.includes.master')

@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}');">
            <div class="container">
              <h1>{{$service->name}}</h1>
              <nav class="breadcrumbs">
                <ol>
                  <li><a href="{{route('home')}}">Home</a></li>
                  <li><a href="{{route('services')}}">Services</a></li>
                  <li class="current">{{$service->name}}</li>
                </ol>
              </nav>
            </div>
          </div><!-- End Page Title -->

        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4 first-row">

              <div class="col-lg-9" data-aos="fade-up" data-aos-delay="100">
                <h2 class="post-title">About Creative and CGI Advertising</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    
                    <p>Datamysite uses Creative and CGI Advertising Dubai to convert static marketing into innovative interactive encounters. Our team combines advanced CGI technology with creative specialisation to create breathtaking ads which retain audience attention while building brand visibility. Datamysite turns hyper-realistic 3D animations and interactive AR and VR ads into innovative solutions which leave your brand imprinted in audiences' minds.</p>

                    <br>
                    <div class="row services gy-4">
                        @foreach($subservices as $val)
                          <div class="col-lg-8 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon flex-shrink-0"><i class="{{$val->icon}}" style="color: #f44d46;"></i></div>
                            <div>
                              <h4 class="title">{{$val->name}}</h4>
                              <p class="description">{{$val->description}}</p>
                              <a href="{{URL::to('/'.$service->slug.'/'.$val->slug)}}" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                            </div>
                          </div>
                          <!-- End Service Item -->
                        @endforeach
                    </div>

                    <h4>Why Choose Creative and CGI Advertising Dubai?</h4>
                    <p>Datamysite maintains its position as a reliable Creative advertising services Dubai provider that createscustomised impactful advertising campaigns for Dubai-based brands. Strategic effectiveness meets visual excellence through our approach, which applies creative design to technological capabilities to produce compelling advertisements.</p>
                    <ul>
                        <li>Visual excellence in our advertisements emerges from using advanced CGI and animated technology.</li>
                        <li>Our organisation boasts designers and animators who specialise in their artistic disciplines.</li>
                        <li>The approach generates customised solutions which adapt to show both your core brand identity and marketing targets.</li>
                        <li>Every advertising effort we produce generates campaign material that stays with your target audience.</li>

                    </ul>

                    <h4>Our Creative and CGI Advertising Dubai Services</h4>
                    <ul>
                        <li><strong>3D Product Visualisations</strong>: Present your products in lifelike detail with 3D CGI advertising Dubai.</li>
                        <li><strong>Animated Explainer Videos</strong>: The utilisation of animated explainer videos simplifies difficult concepts through animated presentation methods.</li>
                        <li><strong>Augmented Reality Ads</strong>:  Deliver interactive and immersive advertising experiences.</li>
                        <li><strong>Virtual Reality Content</strong>:  Bring your brand story to life in a fully immersive environment.</li>
                    </ul>

                    <p>
                        Our company provides Cinematic CGI Campaigns which deliver high-quality cinematic CGI solutions for spectacular visual advertising campaigns.
                    </p>
                    
                    <h4>Benefits of Creative and CGI Advertising Dubai</h4> 
                    <p>The chief advantages of CGI animation for advertising UAE are</p>
                    <h5>- Unlimited Creative Freedom</h5>
                    <p>Through CGI animation for advertising UAE, brands achieve freedom from conventional restrictions in their advertisement creation. Through CGI, people can create both futuristic urban landscapes and complex productions of detailed products, which were previously seen as impossible tasks. Your brand can achieve unique visual appeal, which will draw attention from your audience.</p>
                    <h5>- Increased Engagement and Brand Awareness</h5>
                    <p>Unique visual content manages to attract viewers while maintaining their interest. Creative digital advertising UAE develops advertising solutions which remind viewers once they see your ads. High-quality CGI makes storytelling more effective, which keeps your brand at the forefront of consumer consciousness.</p>
                    <h5>- Cost-Effective Solutions</h5>
                    <p>The cost of doing traditional physical advertisement shoots remains high. By using CGI, you can remove all expenses linked to set production and location selection, as well as material handling expenses. The investment in CGI advertising Dubai creates substantial profits by delivering powerful visual narratives.</p>

                    <h4>Industries Benefiting from Creative and CGI Advertising Dubai</h4>
                    <p>
                        <strong>Real Estate</strong>: Showcase properties with lifelike 3D walkthroughs.<br>
                        <strong>Automotive</strong>: The automotive industry can showcase cars in a modern design environment using CGI improvements to their visual presentations.<br>
                        <strong>Fashion</strong>: Fashion brands must use distinctive creative marketing efforts to present their products visually with intense originality.<br>
                        <strong>Technology</strong>: The tech industry features product characteristics through visual effects and engaging animations to capture viewer attention.
                    </p>

                    <h4>How Datamysite Leads in Creative and CGI Advertising Dubai</h4>
                    <p>The innovative company Datamysite emerged as a digital and out-of-home (OOH) media leader when it launched in Dubai in 2021. Datamysite specialises in Creative digital advertising UAE to deliver advanced marketing solutions which meet specific business requirements. Our company assists brands by using digital media buying approaches to achieve optimal placements, which ensures market success.</p>
                    <ul>
                        <li>We employ the latest CGI and animation tools to create visually stunning ads.</li>
                        <li>Our team comprises designers, and animators who are experts in their craft.</li>
                        <li>Every campaign we offer is designed to reflect your brand's personality and objectives.</li>
                        <li>We create ads that leave a lasting impression on your audience.</li>

                    </ul>
                    <br>
                    <p>Contact Datamysite for Creative and CGI Advertising Dubai services if you want to revolutionise your advertising techniques. Partner with Datamysite for top-tier "Creative and CGI Advertising Dubai" solutions.</p>





                    <br><br>
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>What industries can use CGI advertising to their benefit?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>CGI advertising demonstrates flexibility to suit advertising needs within real estate industries as well as automotive sectors, fashion markets, and technology platforms.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>What is the time required to make a CGI ad?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The project duration depends on the level of complexity contained throughout the project work. The duration for executing a CGI advertising campaign spans between 4 weeks and 8 weeks on average.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>Is CGI advertising expensive?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Investing in CGI advertising leads to superior returns as it enables the production of compelling advertisement campaigns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span>Can I use CGI for social media campaigns?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>CGI advertising material is prepared for multiple platforms like social media, which ensures maximum audience engagement across multiple platforms.</p>
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