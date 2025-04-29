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
                <h2 class="post-title">About Transit Media</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    
                    <h4>Make Your Brand Unmissable with Transit Media in the UAE</h4>
                    <p>Dubai moves fast, and so do its people. Commuters and tourists rush from one place to another each day. Their eyes scan the world around them. That is where transit media in the UAE comes in. You can position your brand right in front of them when they least expect it but need it most with transit media. <br>
                    At Data My Site, we turn everyday journeys into brand experiences. A taxi on Sheikh Zayed Road. A metro train packed with professionals. A bus winding through bustling streets. Each one carries your message and makes sure people see and act on it.</p>


                    <br>
                    <div class="row services gy-4">
                        @foreach($subservices as $val)
                          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
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

                    <h4>Why Transit Advertising in Dubai Works?</h4>
                    <p>People ignore digital ads. They scroll past them, block them, or just don’t care. But a massive, beautifully designed ad on a bus? A sleek, unmissable wrap on a metro? That sticks. It becomes part of their daily routine, a familiar sight in a city that never slows down.</p>

                    <ul>
                        <li><strong>You Can’t Skip It</strong> – No “close” button. No ad blocker. Just pure, in-your-face brand visibility.</li>
                        <li><strong>People Actually Pay Attention</strong> – When you’re stuck in traffic or waiting for a bus, you look around. Your brand becomes part of their world.</li>
                        <li><strong>It Reaches the Right People</strong> – Whether it’s a CEO heading to a meeting or a shopper planning their next big purchase, our transit media campaigns in the UAE put your message exactly where it needs to be.</li>

                    </ul>

                    <h4>How We Differentiate Your Brand with Transit Advertising in Dubai?</h4>
                    <p>We do not believe in putting ads on vehicles and calling it a day. We create transit media campaigns in Dubai that demand attention.</p>

                    <ol>
                        <li><h5>Taxi Advertising – Your Brand, Citywide</h5>
                        Taxis are everywhere. They move through the busiest streets and pick up clients from five-star hotels. Your brand travels through Dubai and grabs eyeballs with full taxi wraps and rooftop ads. </li>
                        <li><h5>Bus Advertising – Large and Impossible to Miss</h5>
                        Buses do not move people—they move brands. Buses ensure your message gets seen, whether it is a full bus wrap dominating the road or side panel ads reinforcing your brand’s presence. What about bus shelters? That’s premium ad space right where commuters wait, giving them time to absorb your message.</li>
                        <li><h5>Metro & Tram Advertising – High Traffic, High Impact</h5>
                        Dubai Metro moves thousands of professionals, residents, and tourists every day. That’s a captive audience—one that sees your brand while they wait, travel, and think. Options include:
                            <ul>
                                <li><strong>In-Train Ads</strong> – Directly in front of passengers for the entire ride.</li>
                                <li><strong>Station Branding</strong> – Complete takeovers for total dominance.</li>
                                <li><strong>Platform Billboards</strong> – Placed right where people stand and stare.</li>
                            </ul>
                        </li>
                        <li>
                            <h5>RTA Fleet Branding – Moving Billboards That Work </h5>   
                            From trams to government transport fleets, these vehicles travel through high-value areas, ensuring maximum exposure for your brand.

                        </li>
                    </ol>

                    <h4>Why Transit Media Advertising Delivers Real ROI?</h4>
                    <p>This is not about putting up an ad. It is about creating an experience as well as a brand memory that stays. Here is why our Dubai transit media services bring results. </p>

                    <ul>
                        <li><strong>Longer Exposure</strong> – Transit ads stay in sight for months, unlike digital ads that disappear in seconds. </li>
                        <li><strong>Citywide Coverage</strong> – Your brand is not stuck in one place. It moves and reaches different areas.</li>
                        <li><strong>Perfect for Any Business</strong> – Transit media works whether you sell luxury watches or coffee. It builds trust and awareness.</li>
                        <li><strong>Affordable Advertising</strong> – Transit media gives long-term visibility for a one-time cost compared to online ads. </li>
                    </ul>

                    <h4>What Makes Data My Site Different?</h4>
                    <p>We know Dubai. We know its roads and its people. Our team does not place ads—they create campaigns that stick.</p>

                    <ul>
                        <li><strong>Smart Targeting</strong> – We place your ads where they will have the highest impact. This makes sure they are seen by the right people at the right time.</li>
                        <li><strong>Creative That Stands Out</strong> – We design campaigns that demand attention and spark conversation.</li>
                        <li><strong>End-to-End Service</strong> – We handle everything from concept to execution.</li>
                    </ul>

                    <p>
                        Dubai is a city of opportunities. Transit media in the UAE ensures your brand is everywhere. Let us create something unforgettable. Contact Data My Site today.
                    </p>




                    <br><br>
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>Is Transit Advertising in Dubai Effective for Luxury Brands?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Several luxury brands use transit advertising to market their products. Luxury brands gain significant exposure with premium placement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>Can I Choose Which Areas My Transit Ads Appear In?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We help you target specific business districts or residential areas to reach the right audience.</p>
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