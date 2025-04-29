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
                <h2 class="post-title">Outdoor Advertising in Dubai with DataMySite</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    <h4>Elevate Your Brand's Visibility and Stand Out with Impactful Outdoor Advertising</h4>
                    <p>Your message belongs on Dubai's stunning advertising canvas. The strategic placement of outdoor advertising Dubai can benefit your brand. Premium billboard positions across major business districts give your brand consistent recognition. Innovative outdoor advertising solutions from our team at DataMySite can take your business to the next level.</p>

                    <h4>Why Choose Outdoor Advertising in Dubai?</h4>
                    <p>The strategic selection of outdoor advertising services UAE transforms your marketing investment into measurable results. From striking digital displays to premium static billboards, your brand gains recognition across key decision-making zones.<br>
                    Our focus is on putting your brand in front of the right people at optimal times. We know that placing your message along these routes builds steady brand awareness. Here are the benefits of implementing outdoor ads –</p>

                    <br>
                    <div class="row services gy-4">
                        @foreach($subservices as $val)
                          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon flex-shrink-0"><i class="{{$val->icon}}" style="color: #f44d46;"></i></div>
                            <div>
                              <h4 class="title">{{$val->name}}</h4>
                              <p class="description">{{$val->description}}</p>
                              <a href="{{URL::to('/'.$service->slug.'/'.$val->slug)}}" class="readmore stretched-link"><span>Details</span><i class="bi bi-arrow-right"></i></a>
                            </div>
                          </div>
                          <!-- End Service Item -->
                        @endforeach
                    </div>
                    <br>

                    <h4>Maximise Brand Awareness with Premium Locations</h4>
                    <p>Placing your advertisement in significant locations will increase its engagement. Sheikh Zayed Road, Downtown Dubai, and Dubai Marina provide unmatched footfall and traffic. Your message will remain in front of the audience.</p> 
                    <h4>Customised Outdoor Media Campaigns Dubai</h4>
                    <p>Your brand has a unique story. Outdoor media campaigns Dubai ensure that the story reaches the right people. Every format brings a fresh opportunity to connect with your audience, from static billboards to dynamic LED screens. Well-placed messaging builds consumer confidence and drives engagement.</p>
                    <h4>Round-the-Clock Visibility and Consistent Branding</h4>
                    <p>Unlike digital ads that can be skipped, outdoor advertising Dubai stays visible 24/7. Your brand maintains a constant presence, ensuring top-of-mind awareness among potential customers – whether day or night, your message continues working. Your message can appear on premium sites across Dubai's most influential commercial districts.</p>
                    <h4>Excellent Outdoor Billboard Marketing UAE</h4>
                    <p>Billboards offer immediate visibility. Whether towering above highways or standing in busy intersections, outdoor billboard marketing UAE places your brand in direct view of thousands every day. Large-format displays provide high recall value and credibility.</p>
                    <h4>Seamless Integration with Digital Strategies</h4>
                    <p>A strong marketing campaign blends online as well as offline engagements. Outdoor advertisements direct traffic to your website, social media, and store. QR codes, hashtags, and interactive displays encourage consumers to take action instantly.</p>
                    <h4>Converting High Traffic into Revenue</h4>
                    <p>Research proves the impact of outdoor media campaigns Dubai on business growth. UAE residents notice outdoor advertisements during their daily commute. Your brand stays visible for over 18 hours every day. Digital displays allow you to refine your message based on real-time performance data.</p>
                    <h4>Best Outdoor Advertising Solutions GCC</h4>
                    <p>Dubai's market extends beyond city limits. Best outdoor advertising solutions GCC ensure your brand reaches audiences across the Gulf region. Expanding your message beyond Dubai enhances credibility and market influence.</p>
                    <h4>Outdoor Advertising that Delivers ROI</h4>
                    <p>Every marketing investment must yield results. Outdoor advertising services UAE generate brand recall, customer engagement, and increased sales. Whether launching a new product or reinforcing brand positioning, well-placed ads drive measurable growth.</p>
                    <h4>Partner with DataMySite for Unmatched Visibility</h4>
                    <p>With expertise in outdoor media campaigns Dubai, DataMySite helps businesses make an impact. From location selection to campaign execution, our approach maximises visibility and engagement.</p>
                    <h4>Expert Location Selection for Maximum Reach</h4>
                    <p>Choosing the right location is key to advertising success. DataMySite identifies prime areas in Dubai with high foot traffic and business activity. It ensures your brand captures the attention of customers to improve conversions.</p>
                    <h4>Comprehensive Campaign Execution from Start to Finish</h4>
                    <p>A well-planned campaign delivers results. DataMySite manages every aspect, from concept creation to final implementation. Our team will check the design and placement. We also monitor the performance to ensure your brand gets the exposure it deserves with a return on investment.</p>
                    <h4>Data-Driven Insights for Smarter Advertising</h4>
                    <p>Success comes from informed decisions. DataMySite uses advanced analytics to monitor engagement and audience interaction. These insights allow us to refine strategies, optimise the placement, and maximise the effectiveness of your outdoor advertising efforts.<br>
                    Your brand deserves recognition. Invest in outdoor advertising Dubai and reach your audience where they live and work. Contact DataMySite to secure your premium advertising space. Make your brand impossible to ignore.</p>


                    <br><br>
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>How long does it take to set up outdoor advertising? 
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Your campaign can go live within two or three weeks after approval. This includes design finalisation, location confirmation, and installation. Rush installations are possible for urgent campaigns, though standard timelines ensure quality execution.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>Can outdoor ads be changed or updated frequently? 
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>You can update digital displays instantly and traditional billboards within 48 hours. Regular updates keep your message fresh and relevant. Consider seasonal changes or promotional periods when planning update schedules.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>What are the locations for outdoor advertising in Dubai? 
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>You can find advertising locations in Downtown Dubai and Dubai Marina (also Sheikh Zayed Road). These areas offer high visibility and consistent traffic flow. </p>
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