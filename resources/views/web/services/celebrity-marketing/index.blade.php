@extends('web.includes.master')

@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service/'.$service->slug).'.png'}}');">
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
                <h2 class="post-title">About Celebrity Marketing</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    <p>
                        At datamysite, we offer businesses the chance to work with Bollywood stars and sports personalities through its Celebrity Marketing Dubai service. Celebrities use their powerful status to enhance brand visibility through multiple channels, which in turn generates credibility and stronger emotional bonds with their supporters. We develop strategies to emphasise your brand through every product launch event and promotional campaign.

                    </p>
                    
                    <div class="row services gy-4">
                        @foreach($subservices as $val)
                          <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
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
                    <br>
                    
                    <h4>Why Choose Celebrity Marketing Dubai?</h4>
                    <p>There are compelling reasons for businesses to choose Celebrity Marketing Dubai in the current marketing environment. Through the usage of well-known personalities, Celebrity Marketing Dubai enables brands to achieve market distinction. The right execution of celebrity collaboration between brands results in increased audience reach while it establishes deeper trust relationships and emotional bonding with consumers.</p>
                    <h4>Key Benefits of Celebrity Marketing</h4>

                    <ul>
                        <li>Through Celebrity Marketing Dubai, you receive several primary advantages, such as maximum exposure through celebrity attention and broad brand visibility.</li>
                        <li>Consumers have faith in the brands that major celebrities endorse because these famous personalities have already built strong trust relationships with their fans.</li>
                        <li>You have the option of appealing to diverse audiences across multiple demographics and regions.</li>
                        <li>Consumer connection becomes stronger when brands get backed by celebrity endorsements.</li>
                    </ul>

                    <h4>Why Choose Bollywood Celebrity Endorsements Dubai</h4>
                    <p>The branding technique involving Bollywood celebrities finds great use in Dubai to appeal most strongly to its large South Asian population. Their authority reaches beyond entertainment to affect what people wear as well as how they live and what they purchase.<br>
                    At datamysite, we facilitate Bollywood Celebrity Endorsements Dubai through: </p>

                    <ul>
                        <li><strong>Brand Endorsements</strong>:  Partner with Bollywood superstars for impactful TV ads and digital campaigns.</li>
                        <li><strong>Event Appearances</strong>:  Attract massive crowds and media attention with celebrity appearances.</li>
                        <li><strong>Social Media Campaigns</strong>: A social media marketing strategy enables Bollywood stars to use their social influence and reach millions of viewers.</li>
                        <li><strong>Customised Collaborations</strong>: Businesses can establish tailor-made brand alliances that match their company vision together with their core values.</li>
                    </ul>

                    <h4>Sports Personality Marketing</h4>
                    <p>The sports-oriented culture of Dubai, along with other GCC countries, creates opportunities for effective athlete collaborations through Sports Personality Promotions GCC programs. When sports athletes join brand collaborations, they provide credibility, motivational elements, and desirable characteristics. All of this appeals to fitness enthusiasts and active consumers, along with younger audiences.</p>
                    <h4>How We Collaborate with Sports Personalities</h4>
                    <p>Our Sports Personality Promotions GCC operation works through:</p>

                    <ul>
                        <li><strong>Corporate Engagements</strong>:  Enhance your corporate events with guest appearances from sports legends.</li>
                        <li><strong>Motivational Campaigns</strong>: They enable you to share the success stories of athletes with your audience.</li>
                        <li><strong>Sports Campaigns</strong>:  requires athletes to advertise health products and sports-based products along with fitness-oriented products.</li>
                    </ul>

                    <p>At datamysite, we deliver more than celebrity-brand matchmaking services. datamysite delivers complete marketing solutions that enable smooth implementation and deliver maximum results.</p>



                    <br><br>
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>How do I choose the right celebrity for my brand?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>At datamysite, our Celebrity Marketing Dubai services help brands and clients select appropriate talent by considering their industry sector audience demographics and marketing targets. We work as the mediator between clients to handle all discussions regarding negotiations for partnership agreements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>Are Bollywood Celebrity Endorsements Dubai suitable for all industries? 
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes! Bollywood stars effectively improve brand acceptance in all major business areas, such as fashion and luxury and technology and retail.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>What expenses are involved when working with a celebrity for brand promotion?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Choosing a celebrity for your marketing campaign depends on their fame level combined with the width of your campaign and its period. Our team helps businesses find appropriate solutions regardless of their budget range.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span>How long does it take to plan and execute a celebrity campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The execution timeline extends between a few weeks and months while we maintain efficient completion procedures. Our real-time analytics, together with audience engagement metrics, enable performance tracking of campaign success.</p>
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