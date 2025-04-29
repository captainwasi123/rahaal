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
                <h2 class="post-title">About Micro Influencer Marketing</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$subservice->slug.'.png')}}" alt="{{$subservice->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    
                    <h4>Micro-Influencer Marketing: Originate Authentic Engagement While Bringing Growth to a Brand</h4>
                    <p>Micro-influencer marketing emerged as a decisive agent of change among brands that seek to connect with their audiences in more authentic and targeted ways. Micro-influencers typically command a follower base of anywhere from 10,000 to 100,000: mass communication agents whose numbers balance very little and much. These types of influencers usually manage a bond with the audience, while they can target a broader demographic, a real advantage for a niche-centric campaign. </p>
                    <h4>Why Micro-Influencers?</h4>
                    <p>Micro-influencers sit in a rare position, combining authenticity, credibility, and targeted reach. Below are some of the most effective reasons to hire micro influencers for promoting brands:</p>
                    <h4>Credibility and Expertise:</h4>
                    <p>Micro-influencers are nearly always positioned as experts in their narrower fields, including beauty, fitness, technology, or travel. When you hire micro influencers followers trust their opinions; they see them as highly effective and credible sources for product recommendations and advice. This trust yields higher engagement rates and greater sway in influencing purchase decisions.</p>
                    <h4>Wider but Targeted Reach:</h4>
                    <p>In a nutshell, micro-influencers have a wider reach than nano-influencers but without sacrificing audience engagement. This makes them quite useful for brands that want to boost visibility but still want to maintain some connection to niche communities. When you hire micro influencers they make sure that the considerable content that they develop targets specific audiences, providing an infused opportunity for your communication to land perfectly.</p>

                    <h4>Cost-Effective with High ROI:</h4>
                    <p>Although micro influencer marketing is more expensive than nano influencers, it is comparatively more affordable than celebrities and macro influencers, so it hits that sweet spot. Brands find that they can get great visibility and conversions through micro-influencer engagements without breaking the marketing budget. The return on investment becomes substantial because these influencers have great influence with their fans.</p> 
                    <h4>Versatile Across Industries:</h4>
                    <p>Micro-Influencers tend to be very versatile, thus suited for industries such as fashion, fitness, IS/IT, lifestyle, beauty, and travel. Their ability to create diversified content lets brands run creatively inspiring campaigns which suit different marketing goals.</p>
                    <h4>Target and True Audiences:</h4>
                    <p>Micro-influencers regularly speak with their audiences through comments, direct messages, and personalized content and approaches. As a result, trust and loyalty are cultivated with any engagement, resulting in much more genuine references.</p>



                    <br><br>
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>Which industries benefit the most from micro-influencer campaigns?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Beauty, fitness, technology, fashion, and travel industries record the greatest successes with micro influencer marketing. These are visually appealing industries driven by subjective recommendations, making them ideally suited for influencer campaigns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>How do micro-influencers build trust with their audiences?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Micro influencers for brand promotions build profound trust with their audience because of the authenticity of their posts, the quality of their content, and its relevance to their niche. Followers see them as human and relatable; therefore, they take the influencer's recommendations seriously as opposed to just a commercial promotion.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>Can I use more than one micro-influencer for my campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Sure! Partnering with multiple influencers can increase your brand reach and engagement. This will allow you to target a wider and more diverse audience across various niches, maximizing the benefit of your micro influencer marketing campaign.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span>What are the measures of success in micro-influencer campaigns?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Key performance indicators such as engagement measures, conversion rates, website referrals, brand mentions, and total ROI on the campaign can measure success in micro influencer marketing. Based on these metrics, it can then analyze a successful partnership between a brand and its influencer. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-5">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                        <span class="badge">5</span>What payment will have to be made for hiring the micro-influencer?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Hiring micro influencers for brand promotions can cost anywhere from a few hundred to several thousand dollars per post, depending upon factors like follower count, engagement rates, niche, and content type. They tend to be more reasonable than their macro counterparts, and such pricing ranges mainly depend on the influence and campaign requirements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-6">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                        <span class="badge">6</span>What criteria do I have to follow to select the best micro influencer for my company?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                <div class="card-body">
                                    <p>While selecting the micro influencers for brand promotions, consider the demographics of their audience, engagement metrics, quality of their content, and how their values align with your brand. It is crucial to work with an influencer whose audience can treat your brand as relevant to their target audiences. </p>
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