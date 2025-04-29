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
                <h2 class="post-title">About Nano Influencer Marketing</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$subservice->slug.'.png')}}" alt="{{$subservice->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    
                    <h4>Nano Influencer Marketing: The Future of Authentic Brand Promotion</h4>
                    <p>Nano influencer marketing is now one of the hottest techniques brands use to enable them to create genuine connections with customers. Unlike well-known celebrity endorsements and macro-influencer campaigns, nano-influencer marketing mainly focuses on people from 1,000 to 10,000 real or engaged followers. Nano influencers have a smaller audience than macro-influencers, but they also carry a huge influence, making them a worthy asset for brands trying to promote trust and authenticity.</p>

                    <h4>Why Consider Nano Influencer Marketing?</h4>
                    <p>Benefits of nano influencers are innumerable. Nano influencers present a range of benefits for cost-effective and well-targeted brands. Here’s why more brands are now turning to nano influencer marketing:</p>

                    <ol>
                        <li><strong>Authentic and Genuine Recommendations</strong>: When you hire nano influencers rest assured that they usually have a close-knit connection with their followers. If you check out their feeds, you’ll realize they act true to personalized connective interactions. This feels more legitimate to them than broader commercialized endorsements from larger influencers.</li>
                        <li><strong>Cost-effective</strong>: While small businesses and startups look for budget-friendly options to run marketing, nano influencer marketing is undoubtedly the best option. In this instance, you can bring on board nano influencers at a tiny fraction of the price of macro or celebrity influencers and still garner astounding engagement rates.</li>
                        <li><strong>High Engagement Rates</strong>: One of the many benefits of nano influencers is engagement. Engagement is the king factor of any successful influencer campaign. Nano influencers usually see higher engagement than macro influencers because their audience feels a sense of personal connection, increasing the number of likes, comments, shares, and interactions as a whole.</li>
                        <li><strong>Hyper-targeted Campaigns</strong>: Depending on whether you want to talk about different areas of a big city, regions, or niche communities, nano influencer marketing is an avenue for highly tailored campaigns to get into these areas to reach the specific audience in which they are required to maximize the return on investment. </li>
                        <li><strong>Greater Creative Freedom</strong>: When you hire nano influencers it enhances brands' creative flexibility. These influencers are more willing to explore various content formats that appeal to their audience, ensuring your brand message comes across naturally and engagingly.</li>
                        <li><strong>Stronger Community Influence</strong>: Nano influencers perform well in community-oriented cultures. Their followers see them not just as content creators but as peers and opinion leaders. Such influence can greatly enhance the credibility of brands in close-knit clusters.</li>
                    </ol>


                    <br><br>
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>Are nano influencers good for big brands?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes! Even larger brands can effectively use nano influencer marketing to tap their target audiences in niche markets or certain demographics. This allows brands to maintain that personable touch even within vast campaigns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>How do I locate suitable nano influencers?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>To locate appropriate influencers, brands analyze audience demographics, usually select those with decent engagement rates, and find content pertinent to their brand message. Many brands also adopt influencer marketing platforms or agencies specialized in nano influencer marketing to streamline this process.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>Which platforms are best to pursue for establishing nano influencer campaigns?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Social platforms such as Instagram, TikTok, and YouTube confer varying forms of interaction and broad consumer bases. Which one to use depends on your brand goals and target audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span>What is the average cost of nano influencer campaigns?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Nano influencer marketing is affordable, especially for budding companies and small enterprises. The combination of lower initial costs and high engagement rates allows for a sweet return on investment.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-5">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                        <span class="badge">5</span>Can nano influencers assist with product launches?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Of course! When you hire nano influencers it helps generate hype for new product launches with sincere reviews, unboxings, and demos. Their loyal followers usually cannot wait to try the products suggested by trusted influencers. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-6">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                        <span class="badge">6</span>What strategies do nano influencers employ to remain authentic in their promotional activities?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                <div class="card-body">
                                    <p>These nano influencers remain authentic by working with brands with which they share similar values and producing content in their own voice. This authentic connection with an audience enables them to do promotions in a more natural way without being overly commercial.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-7">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                        <span class="badge">7</span>What are some of the challenges in working with nano influencers?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                <div class="card-body">
                                    <p>While nano influencer marketing comes with several perks, challenges include managing multiple influencers on a larger scale and maintaining a consistent message through campaigns. Furthermore, some influencers do not have any marketing experience, which would add to the burden on brands to guide and assist such influencers more. </p>
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