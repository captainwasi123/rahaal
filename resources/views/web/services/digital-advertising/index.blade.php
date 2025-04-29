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
                <h2 class="post-title">About Digital Advertising</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    <h4>High-Impact Digital Advertising for Businesses in Dubai</h4>
                    <p>
                        Some ads get ignored. Others make people stop, look, and act.<br>
                        That’s the difference between ordinary ads and high-ROI digital advertising in the UAE. It’s not about throwing money at screens—it’s about making every dirham count. The right strategy puts your brand where your audience already is—whether that’s streaming Netflix or standing in an elevator.
                        Digital advertising is not a mere item in the budget for CEOs and Marketing Heads. It is an investment. And like any investment, it needs to pay off.<br>
                        So, what’s the smartest way to advertise in Dubai? Simple. Go where the attention is with Data My Site. 

                    </p>
                    <br>
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

                    <h4>Why Choose Our Digital Advertising Services in Dubai? </h4>
                    <p>Most ads get ignored. People skip them, scroll past them, or tune them out.<br>
                    But what if your ad wasn’t something to avoid? What if it felt natural, relevant, even helpful?<br>
                    That’s where our best digital ad campaigns in Dubai make the difference. Instead of shouting into the void, they place your brand in the right moments, with the right message, in front of the right people.</p>
                    <ul>
                        <li>Your audience already watches streaming content—so meet them there.</li>
                        <li>They already visit malls and hotels—so show up where they walk.</li>
                        <li>They already ride elevators—so make them notice your brand while they wait.</li>
                    </ul>
                    <p>This isn’t about disrupting. It’s about fitting seamlessly into their world.</p>

                    <h4>Our Digital Advertising Services: Where Visibility Meets Conversion</h4>
                    <p>We do not run ads for the sake of running ads. Our online marketing solutions in the GCC involve the creation of impactful campaigns that get seen, remembered, and acted on.</p>

                    <h5>1. OTT Advertising (Streaming Ads That Do Not Get Skipped)</h5>
                    <p>No one watches traditional TV anymore. They stream. And that’s exactly where your brand needs to be.<br>
                    With OTT advertising, your brand appears on platforms like Netflix, Hulu, and Amazon Prime Video—inside premium content, not buried in social media noise.</p>
                    <h6>Why OTT Works?</h6>
                    <ul>
                        <li><strong>Your Ad Cannot Be Skipped</strong> – Unlike YouTube, these ads get watched.</li>
                        <li><strong>Laser-Targeted Reach</strong> – Ads are shown based on demographics, interests, and habits.</li>
                        <li><strong>Measured Performance</strong> – Every impression, view, and action is tracked.</li>
                    </ul>
                    <p>This is digital advertising without the waste.</p>

                    <h5>2. DOOH Advertising (Digital Billboards That Actually Work)</h5>
                    <p>Most billboards are background noise. People glance at them and move on.<br>
                    Our DOOH (Digital Out-of-Home) advertising changes that. High-resolution, animated, and strategically placed in Dubai’s busiest locations, these screens demand attention.</p>
                    <h6>Why DOOH Advertising Delivers?</h6>
                    <ul>
                        <li><strong>Your Audience is Engaged</strong> – No distractions, no skipping.</li>
                        <li><strong>24/7 Brand Visibility</strong> – Ads run around the clock in prime locations.</li>
                        <li><strong>Elevated Brand Positioning</strong> – Your brand is placed next to premium experiences.</li>
                    </ul>
                    <p>If you want to target affluent customers who make big decisions, this is how you do it.</p>
                    <h5>4. Elevator Advertising (The Ad That Cannot Be Ignored)</h5>
                    <p>What did you do the last time when you were in an elevator? Probably nothing. Maybe you checked your phone or stared at the door. Now imagine if, in that silent, distraction-free moment, a well-placed ad caught your eye. That’s why elevator digital advertising works. No one can skip and ignore it. </p>
                    <h6>Why It’s So Effective?</h6>
                    <ul>
                        <li><strong>Captive Audience</strong> – People are stuck in a small space with your ad.</li>
                        <li><strong>High Daily Exposure</strong> – Office workers, residents, and visitors see it multiple times a day.</li>
                        <li><strong>Hyper-Local Targeting</strong> – Choose specific buildings to reach your ideal customers.</li>
                    </ul>
                    <p>
                        This is not just visibility. It is repeated, unavoidable visibility.<br>
                        Are you ready to make every dirham count? It is time for a smarter approach if you are done wasting money on ads no one notices. Call Data My Site today to launch high-ROI digital advertising in Dubai.
                    </p>



                    <br><br>
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>Why is OTT Advertising Beneficial?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>OTT ads designed by us target specific demographics. It makes them more effective than traditional TV commercials.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>Is DOOH Advertising Expensive?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our DOOH ads offer dynamic content, higher engagement, and real-time updates—all at a competitive cost.</p>
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