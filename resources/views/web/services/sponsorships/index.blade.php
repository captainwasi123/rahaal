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
                <h2 class="post-title">About Sponsorships</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    
                    <p>Brand visibility, together with credibility enhancement, along with targeted audience engagement, are all three traits that sponsorships can efficiently deliver. Datamysite provides sponsorship opportunities Dubai, which fulfil your brand's vision and strategic goals. Our team takes care of your brand visibility by connecting you to events as well as influencers and community projects to achieve maximum exposure.</p>

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

                    <h4>Our Sponsorship Services</h4>
                    <p>As a company we offer multiple sponsorship programs designed for every marketing requirement.</p>
                    <ul>
                        <li><strong>Event Sponsorships</strong>: Businesses gain greater brand visibility by linking up with prestigious events.</li>
                        <li><strong>Media Sponsorships</strong>: Collaborating with media platforms to showcase your brand.</li>
                        <li><strong>Community Sponsorships</strong>: This involves backing neighbourhood programs which develop good relations and brand appreciation among residents.</li>
                        <li><strong>Influencer Sponsorships</strong>: Leveraging the reach of key influencers in your industry.</li>
                        <li><strong>Corporate Sponsorships</strong>: Your business can expand its reach through Corporate Sponsorships by matching up with respected companies.</li>
                    </ul>

                    <h4>Sponsorship Opportunities Dubai for Businesses</h4>
                    <p>The business centre of Dubai provides multiple opportunities to sponsors who wish to expand their market reach. Sponsorship programs provide organisations with a simple approach to reach potential customers and build their brand visibility in various settings, from exhibitions to social initiatives and corporate events.</p>

                    <h4>Types of Sponsorships</h4>
                    <p>
                        <strong>Corporate Sponsorships UAE</strong>: Through corporate sponsorships, UAE organisations enable businesses to link up with respected organisations while boosting their brand reliability factor. Through these strategic alliances, businesses achieve exposure across expert industry-based conferences, meetings, and networking functions.
                        <br><br>
                        <strong>Event Sponsorships Dubai</strong>: The sponsorship of events in Dubai presents organisations with dedicated opportunities to connect directly with their desired market sector. Businesses can capitalise on their unique sponsorship potential through trade shows mixed with sports tournaments and music festivals, which deliver marketing tools ranging from interactive site exhibits to digital communication and face-to-face audience engagement.
                        <br><br>
                        <strong>Brand Sponsorships UAE</strong>: Brand sponsorships UAE facilitates partnerships between companies and appropriate entities to build matching brand images. Companies should use their resources to support influencers while also backing media outlets and major industry conferences which work to increase brand presence among customers.
                        <br><br>
                        <strong>Sponsorship Activation Services</strong>: The Sponsorship Activation Services Dubai allows businesses to achieve maximum return from their sponsorship investments. Strategic placements of the brand and digital engagement solutions with experiential marketing help build interactive moments that stick with target audiences.
                        <br><br>
                        <strong>Sponsorship Marketing UAE</strong>: The sponsorship marketing model UAE allows companies to implement sponsorships within their unified marketing approaches. Businesses expand their brand visibility along with increasing audience interaction when they use sponsorships across digital advertising, social media platforms, and PR activities.
                    </p>
                    <h4>Benefits of Sponsorship Opportunities Dubai</h4>
                    <ul>
                        <li><strong>Brand Exposure</strong>: Sponsorships enable your brand to appear frequently in the media,, so you achieve broader audience visibility.</li>
                        <li><strong>Authentic Connections</strong>: Recognisable affiliations allow businesses to form genuine associations with consumers who share their brand principles.</li>
                        <li><strong>Competitive Edge</strong>: A well-placed sponsorship grants businesses superior market positioning when they work with important industry players.</li>
                        <li><strong>Community Engagement</strong>: The support of community events, along with fundamental initiatives, allows brands to improve their public reputation and develop strong connections with their community.</li>
                        <li><strong>Increased Sales</strong>: Your brand recognition from sponsorships leads to enhanced sales performance through increased customer acquisition numbers.</li>

                    </ul>

                    <h4>Why Choose Datamysite for Sponsorships?</h4>
                    <p>Our team finds the sponsorship possibilities that serve your business goals in the sponsorship opportunities Dubai sector. Sponsorship activities help businesses gain better visibility within their choice markets. The company designs individual strategies for every sponsorship plan to maximise its effectiveness. We work with the most respected event creators alongside influential people and prominent media venues.
                        <br><br>
                    Are you ready to explore sponsorship opportunities Dubai for your brand? <br>
                    Contact us today! Call us at <a href="tel:971525287259">+971 525 287 259</a> or drop an email at <a href="mailto:contact@datamysite.com">contact@datamysite.com</a>.  </p>




                    <br><br>
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>When choosing the proper business sponsorship, which selection criteria should I follow?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The analysis of your target market allows our experts to recommend sponsorship opportunities Dubai which will best fulfil your business aims.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>What type of events does Datamysite partner with?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We partner with trade shows, business conferences, sports events, cultural festivals, and more.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>Can small businesses obtain benefits through sponsorship engagements?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Small businesses can effectively raise their visibility along with building credibility through sponsorships.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span>What are the anticipated financial returns on sponsorships? 
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The return on investment depends on what type of sponsorship has been chosen together with the chosen activation strategy. We concentrate on achieving quantifiable results while monitoring our accomplishments successfully.</p>
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