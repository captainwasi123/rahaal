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
                <h2 class="post-title">About Macro Influencer Marketing</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$subservice->slug.'.png')}}" alt="{{$subservice->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    
                    <h4>Macro Influencer Marketing: Maximizing Brand Reach and Impact</h4>
                    <p>In digital marketing, macro influencer marketing can be regarded as a compelling marketing strategy that could proffer those brands that want to gain high visibility and influence. Typically, macro influencers have followers numbering between 100,000 and 1 million. This characteristic makes them good candidates for large campaigns targeting brand awareness and market penetration. They are often referred to as industry leaders, celebrities, or well-known public figures who can guide opinions and trends across a reasonably wide demographic spectrum.</p>
                    <h4>Why Go for Macro Influencers?</h4>
                    <p>Macro influencer marketing's main advantage is its efficacy in amplifying the brand message on a broader scale. Brands often hire macro influencers in a globally oriented campaign.</p>
                    <h4>Extensive Exposure Across Multiple Demographics:</h4>
                    <p>Macro influencers for global brands have the word of mouth to reach through cultures and target audiences along with varying age groups, geographic regions, and interests. If the brand wants to go beyond the reach it holds now and create much-needed awareness, this kind of exposure becomes imperative.</p>
                    <h4>High-Quality, Professional Content:</h4>
                    <p>One of the biggest highlights of macro influencer marketing is the provision of professional-grade content by macro influencers. Receiving one of the better content-class producers, they make sure that the brand message is polished and looks good in all senses according to the brand it conveys.</p>

                    <h4>Perfect for Product Launches and Big Campaigns:</h4>
                    <p>If you are preparing for a product launch or a large-scale campaign of macro influencers for global brands, they direct all sorts of activities toward generating buzz in a short period. Their influence drives powerful interactions and media coverage and sometimes even helps trends go viral for certain points.</p>
                    <h4>Influence Beyond Social Media:</h4>
                    <p>In contrast to micro or nano influencers, who generally influence a niche audience, when you hire macro influencers they influence a wider audience, usually even outside the social media spectrum. This profile usually has extensions in media outlets, podcasts, events, collaborations, or otherwise. </p>
                    <h4>Bayer and flexible collaboration:</h4>
                    <p>Macro influencers help elevate the campaigns run by brands and business organizations. Most of these influencers work with other creators, brands, and organizations to create cross-promotion that maximizes audience reach based on engagement.</p>



                    <br><br>
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>What are macro influencers in comparison to traditional celebrities?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Celebrities rely on their showbiz, sports, or music fame, whereas macro influencers manage to build their reputation by creating content for platforms like Instagram, YouTube, and TikTok. Since they constantly connect with their followers, this generates higher engagement and credibility.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>Are macro influencers worth the extra penny?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Indeed, hiring macro influencers is highly cost-effective for brands looking for extensive awareness and professional content. Their high follower count, along with their high-quality production, pays great dividends through increased visibility and engagement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>When will results begin to be visible from macro influencers?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Depending on the intent and platforms used to launch the macro influencer marketing campaign, results can be noticeable soon after the launch. Metrics concerning audience engagement, such as likes, shares, comments, and website traffic, usually grow fast.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span>Is it possible for the macro influencers to work in a campaign with nano or micro-influencers?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>For sure! Many brands employ different tiers of influencers to obtain an ideal blend of wider reach and more targeted engagement. Macro influencer collaborations with micro or nano influencers can create a multi-layered campaign that resonates on a personal and mass level.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-5">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                        <span class="badge">5</span>Which industries can benefit most from employing macro influencer marketing?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Macro influencer marketing gains traction in industries such as fashion, beauty, tech, travel, and entertainment, the sectors in which visual storytelling blooms and appeals over a broad genre-the strengths of macro influencers. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-6">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                        <span class="badge">6</span>How to choose the right macro-influencer for my brand?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                <div class="card-body">
                                    <p>When bringing macro-influencers on board, consider factors like audience demographics, engagement rates, content style, and harmony with your brand's values. An influencer whose personal brand resonates with your target audience will yield more authentic and impactful results.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-7">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                        <span class="badge">7</span>Which platforms are best for macro-influencer marketing? 
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Instagram, YouTube, and TikTok are the main platforms for macro-influencer marketing. These platforms leverage their immense user bases and versatility of content. The choice of platform should be based on campaign objectives and content types that best present the brand.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-8">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-8" data-aria-expanded="false" data-aria-controls="faqCollapse-8">
                                        <span class="badge">8</span>How do macro-influencers ensure content authenticity with such a wide audience? 
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-8" class="collapse" aria-labelledby="faqHeading-8" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Many top macro influencers for campaigns retain their authenticity by being very discerning about their partner brands, aligning closely with their values. Even discussing sponsored products, they create real, relatable content that their audiences can embrace. </p>
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