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
                <h2 class="post-title">About DOOH Advertising (Digital Out-of-Home)</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$subservice->slug.'.png')}}" alt="{{$subservice->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    <h4>Improve Your Brand's Visibility with Our DOOH Advertising Solutions</h4>
                    <p>Your brand needs visibility that makes an impact. Your message needs to grab attention in Dubai's busy spaces. DOOH Advertising Dubai puts your brand on brilliant digital screens. These displays catch the eyes across the UAE, making your content impossible to miss. Consult us for this type of advertising solution at DataMySite.</p>
                    <h4>Why Choose Digital Out-of-Home Ads UAE?</h4>
                    <p>Traditional advertising lacks the flexibility modern brands need. DOOH Advertising Dubai changes your content in real-time to match market conditions. Your campaigns adapt to time, weather, and events - keeping your message fresh and relevant.</p>
                    <h4>Premium Locations across Dubai</h4>
                    <p>Your ads need the right spot to work. We pick prime spaces where your ideal customers spend time. We've secured prime spots in Dubai's most influential areas. From Business Bay to Dubai Marina, your DOOH advertising campaigns appear where they matter most. Financial districts, shopping centres, and transit hubs showcase your brand to high-value audiences.</p>
                    <h4>Data-Driven Success</h4>
                    <p>Numbers tell the real story. Our DOOH advertising analytics track viewer engagement and campaign performance. You'll see exactly how your investment translates into brand awareness and consumer action.</p>
                    <h4>Smart Technology Integration</h4>
                    <p>Your DOOH Advertising campaign works harder through smart integration. Social media feeds, stock updates, and news tickers keep content dynamic. We place your Innovative DOOH campaigns GCC at the forefront of advertising technology.</p>

                    <h4>Maximum Impact, Minimum Waste</h4>
                    <p>Every dirham counts in your marketing budget. DOOH Advertising Dubai targets specific locations and times for optimal audience reach. Your message appears when decision-makers are most receptive.</p>
                    <h4>Beyond Static Displays</h4>
                    <p>Static billboards fade into the background. Digital out-of-home ads UAE command attention through motion and interactivity. Your brand story unfolds through compelling visual narratives that stop viewers in their tracks.</p>
                    <h4>Measurable Returns</h4>
                    <p>Track your campaign's success in real numbers. Our DOOH Advertising platform provides detailed analytics on viewer engagement and exposure time. You'll know exactly how your investment performs.</p>
                    <h4>Environmental Responsibility</h4>
                    <p>Print advertising creates waste. DOOH Advertising reduces your environmental impact while increasing campaign effectiveness. Your brand shows corporate responsibility through sustainable advertising choices.</p>
                    <h4>Expert Campaign Management</h4>
                    <p>We handle every aspect of your DOOH Advertising campaign. From design to deployment, our team ensures flawless execution. Your message reaches the right audience at the right time.</p>
                    <h4>Our Approach to DOOH Campaigns</h4>
                    <p>We build innovative DOOH campaigns GCC that turn heads and bring returns with these services –</p>

                    <h4>Premium Screen Selection</h4>
                    <p>Your brand needs the perfect spot to shine. We've secured access to Dubai's most sought-after digital displays. From financial centres to luxury malls, your message reaches high-value viewers.</p>
                    <h4>Rich Dynamic Content</h4>
                    <p>Static ads fade into background noise. Black and white won't cut it anymore. Rich videos and live updates make people stop and notice. Your content springs to life with smooth animations and crisp video. Live updates keep your message fresh and relevant throughout the day.</p>
                    <h4>Smart Campaign Integration</h4>
                    <p>Numbers tell the truth about ads that work. Watch your reach grow with detailed reports and performance tracking done by our team. Your DOOH Advertising works in harmony with other marketing channels. We sync digital displays with your social media, web presence, and traditional advertising for maximum impact.</p>
                    <h4>Drive Business Growth with DOOH Advertising</h4>
                    <p>Your brand can't afford to blend in. From new product buzz to fresh market push, DOOH Advertising Dubai puts you where you need to be. Talk to us about making your next campaign unmissable. Contact us to discover how DOOH Advertising transforms your brand visibility. Our team creates campaigns that capture attention and drive results in Dubai's dynamic market.</p>


                    <br><br>
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>What types of businesses benefit most from DOOH?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Luxury brands, financial services, and property developers thrive with DOOH Advertising Dubai. B2B companies targeting C-suite executives find particular success through strategic placement in business districts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>Can DOOH screens display real-time updates?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our DOOH Advertising systems integrate live data feeds seamlessly. Your displays update automatically with stock prices, social media, weather, and custom content. This keeps your message current and engaging.</p>
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