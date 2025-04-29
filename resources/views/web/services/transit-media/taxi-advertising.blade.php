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
                <h2 class="post-title">About Taxi Advertising</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$subservice->slug.'.png')}}" alt="{{$subservice->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    <p>
                       Effective mobile advertising opportunities are available throughout Dubai thanks to its extensive taxi network. Taxis serve as effective mobile advertisement platforms that allow your brand to reach both inside their passenger compartments and through city sidewalk visibility. Taxi Advertising Dubai allows your message to move around the city, reaching diverse audiences and creating high visibility for your brand.
                    </p>
                    <h4>What We Offer in Taxi Advertising Dubai</h4>
                    <p>
                        Our taxi advertising solutions at datamysite accommodate different types of business needs. Maximum brand visibility is possible through our solutions, which function effectively regardless of targeting particular districts or achieving whole city market dominance.
                    </p>
                    <ul>
                        <li>
                            <strong>Full Wraps</strong>: Your brand advertises as a mobile display through taxis with complete coverage wraps. Full taxi wrap advertising awards you maximum visibility because it transforms the entire vehicle into your advertisement.
                        </li>
                        <li>
                            <strong>Partial Ads</strong>: You can choose between less obtrusive taxi advertising areas by placing ads on doors or surrounding the roof or back of the vehicle. Your marketing spend can achieve both excellent visibility rates and provide an economically viable solution.
                        </li>
                        <li>
                            <strong>Interior Ads</strong>: Within vehicles, advertising extends directly to passengers through internal advertisements. Your brand gains attention from people aboard because you provide advertising specifically directed toward them during their trips.
                        </li>
                    </ul>
                    <h4>Why Choose Taxi Advertising Dubai?</h4>
                    <p>
                        The United Arab Emirates serves as a commercial and touristic centre that depends on taxi transportation for millions of its residents. Taxi Advertising Dubai offers your brand a unique chance to reach a diverse audience. Taxi advertising showcases products effectively to diverse audiences, specifically in transit areas, encompassing airports, malls, and numerous business districts.
                    </p>
                    <ul>
                        <li>
                            <strong>Covers Multiple Areas and Demographics</strong>: Taxi advertising UAE allows advertisers to penetrate multiple areas and address both local residents and visiting business people and guests. Your message receives maximum visibility because this strategy encompasses a wide range of possible viewers.
                        </li>
                        <li>
                            <strong>Ideal for High-Frequency Exposure</strong>: Regular route activities by taxi services yield multiple opportunities for your target market to see your advertisement. 
                        </li>
                        <li>
                            <strong>Customisable Campaigns</strong>: Our team creates tailor-made advertising campaigns that match your branding approach and your business objectives. From Mobile billboard ads Dubai to targeted Taxi marketing solutions Dubai, we provide the flexibility to adjust your campaign as needed.
                        </li>
                    </ul>
                    <br>
                    <h4>Cost of Taxi Advertising: What You Need to Know</h4>
                    <p>In contrast to other outside brand messaging methods, taxi advertising Dubai remains more accessible to reach your target audience. Taxi advertising exists in yellow, green, and red taxis, which provides multiple branding opportunities for advertisers. Your campaign can function with a minimum of 25 taxis, yet bulk advertising gives the best prices and provides great value for large advertising efforts. <br>
                    The advertising process requires a one-month rental commitment, leading to a tight timeline between artwork approval and campaign launch that can finish within two weeks. We supply comprehensive design assistance to construct taxi art that complies with regional mandatory specifications.</p>
                    <h4>Additional Campaigns: Moving Billboard Campaigns GCC</h4>
                    <p>In addition to traditional taxi ads, we offer Moving billboard campaigns GCC, which allows you to expand your advertising strategy beyond Dubai. Through these campaigns, your brand reaches progressively minded audiences from the Gulf Cooperation Council's member nations, and city residents and road commuters get to witness your message during their journeys.</p>
                    <h4>Conclusion</h4>
                    <p>Taxi Advertising Dubai is an innovative and effective way to showcase your brand to thousands of potential customers daily. datamysite stands as the top choice for helping you master the city's taxi advertising sector through our custom-built campaigns combined with our deep market knowledge.<br>
                    Your brand will enhance visibility through mobile billboard advertising initiatives that you can launch today. Call datamysite today for an advertising consultation if you are seeking ways to boost your marketing approach and desired client acquisition. Your brand deserves to shine among the busy streets of Dubai.<br><br>
                    For additional details, simply reach out to us at (+971) 42 957 001.</p>


                    <br><br>
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>How effective is taxi advertising in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>With thousands of taxis on the road, your brand gains significant exposure daily.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>Can campaigns target specific routes?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we can tailor campaigns to specific areas for better audience targeting.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>Who sees your taxi ads?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Commuters, tourists, business owners, and pedestrians across Dubai's busiest locations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span>How long do taxi advertising campaigns run?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Campaigns typically run for a minimum of one month, with options for longer durations.</p>
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