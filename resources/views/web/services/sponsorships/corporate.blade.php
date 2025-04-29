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
                <h2 class="post-title">About Corporate Sponsorships</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$subservice->slug.'.png')}}" alt="{{$subservice->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    
                    <p>Entrepreneurial companies within Dubai collaborate with events and organisations through Corporate Sponsorships Dubai to increase their brand exposure while achieving market recognition. Organisations that assist events provide money in addition to providing tangible help for marketing benefits that include public exposure and both public address chances and attendee listing data.<br>
                    Sponsorship deals enable companies to fortify their market position along with creating enduring business partnerships. At Datamysite, we offer such services and much more.</p>
                    <h4>Why Choose Corporate Sponsorships UAE?</h4>
                    <p>Any company that selects corporate sponsorships UAE gains access to a specific business audience within this growing market sector. The position of Dubai as a worldwide trade centre and entertainment complex with technological prowess enables sponsors to improve brand credibility as they gain substantial investment returns. Datamysite excels at finding perfect sponsorship opportunities that match specific business targets for their clients.</p>

                    <h4>Types of Corporate Sponsorships Dubai</h4>
                    <p>Here are the common types of business sponsorships UAE and Dubai you can avail of. </p>
                    <ul>
                        <li><strong>Financial Sponsorship</strong>: This requires businesses to provide monetary funds which enables them to gain benefits such as VIP access and promotional promotion.</li>
                        <li><strong>In-Kind Sponsorship</strong>: Instead of financial contributions, businesses present items or operational solutions as forms of sponsorship. Hotel businesses give event accommodations for brand promotions of their establishment.</li>
                        <li><strong>Media Sponsorship</strong>: Corporations enable event promotion by providing no-cost and reduced-cost media advertising services.</li>
                    </ul>

                    <h4>Our Brand Sponsorships Dubai Services</h4>
                    <p>Through our brand sponsorships, Dubai Solutions Datamysite assists businesses in achieving the maximum return on their sponsorship funds. Our services include:</p>
                    <ul>
                        <li><Strong>Conference Sponsorships</Strong>: The act of sponsoring major conferences delivers industry acknowledgement to brands.</li>
                        <li><Strong>Event Sponsorships</Strong>:  Align your brand with high-profile events.</li>
                        <li><Strong>CSR Sponsorships</Strong>:  Enhance corporate social responsibility initiatives.</li>
                        <li><Strong>Trade Show Sponsorships</Strong>: Local trade shows, when sponsored, allow businesses to boost their brand visibility in specific industrial markets.</li>
                        <li><Strong>Sports and Community Sponsorships</Strong>: The strategy of Sports and Community Sponsorships allows businesses to connect with audience members through programs that support sports teams along with local events.</li>

                    </ul>
                    <h4>Benefits of Business Sponsorships UAE</h4>
                    <p>Business sponsorships in UAE will help organisations achieve:</p>
                    <ul>
                        <li><strong>Brand Awareness</strong>: Business Sponsorships UAE helps builders become more visible through events and media platforms.</li>
                        <li><strong>Lead Generation</strong>: The sponsor can reach specific target groups, which helps advance their business operations.</li>
                        <li><strong>Industry Credibility</strong>: Establish your company as an industry leader.</li>
                        <li><strong>Customer Loyalty</strong>:  Build trust and goodwill among potential clients.</li>
                    </ul>

                    <h4>How to Apply for Event Corporate Sponsorship Dubai?</h4>
                    <p>These directions explain how to attain maximum sponsorship value: </p>
                    <ul>
                        <li>Set specific goals.</li>
                        <li>Search for sponsorship opportunities which share your company values by conducting market research.</li> 
                        <li>Collaborate with the event organisers to create personalised sponsorship possibilities.</li>
                    </ul>

                    <h4>Why Choose Datamysite for Corporate Partnership UAE?</h4>
                    <p>Datamysite launched its operations in Dubai in 2021 to become the leading marketing agency that delivers digital and outdoor (OOH) media strategies to its clients. Using knowledge-based data, we help our clients obtain the best corporate partnership UAE opportunities through focused market insights. Our expertise includes:</p>

                    <ul>
                        <li><strong>Digital Media Buying</strong>: Optimising ad placements for maximum impact.</li>
                        <li><strong>OOH Media Buying</strong>:  Enhancing brand visibility across premium outdoor locations.</li>
                        <li><strong>Media and PR</strong>: Media Relations, along with Public Relations, develops intriguing stories for securing exposure across elite media networks.</li>

                    </ul>

                    <p>
                        <a href="{{route('contact')}}"><strong>Contact us</strong></a> today to find the best sponsorship opportunities for your brand.
                    </p>





                    <br><br>
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>How does datamysite find the right sponsorships for my brand?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our team uses your established goals, audience understanding and brand principles for discovering sponsorship options that best match your needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>What form of return on investment (ROI) should I expect to receive?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>When evaluating ROI from sponsorships, one must consider the specific event and strategy at work because it creates opportunities for enhanced brand exposure and client participation alongside new customer acquisition.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>Are there sponsorship opportunities that small businesses could achieve?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our company offers various sponsorship packages for businesses at different budget levels and target objectives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span>Do you handle sponsorship activation?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The company handles complete sponsorship activation that includes branding services together with audience engagement protocols.</p>
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