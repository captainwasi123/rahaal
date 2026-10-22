@extends('web.includes.master')

@section('content')
	<main class="main">

	    <!-- Terms of Use Section -->
	    <section id="terms" class="about section">

	      <!-- Section Title -->
	      <div class="container section-title" data-aos="fade-up">
	        <h1>Terms of Use</h1>
	        <p>Last updated: 22 October 2026</p>
	      </div><!-- End Section Title -->

	      <div class="container" data-aos="fade-up" data-aos-delay="100">
	        <div class="row gy-4 justify-content-center">
	          <div class="col-lg-10 content">

	            <p>
	              By using <a href="https://rahaal-theexplorer.com">https://rahaal-theexplorer.com</a> you agree to these
	              Terms of Use. If you do not agree, please do not use the site.
	            </p>

	            <h2>Content and copyright</h2>
	            <p>
	              All text, photos and videos on this site are created by Rahaal The Explorer unless stated otherwise and are
	              protected by copyright. You may share links and short quotes with credit and a link back. You may not copy,
	              republish or sell full articles, photos or videos without written permission.
	            </p>

	            <h2>Accuracy of travel information</h2>
	            <p>
	              Travel guides are based on my own trips and research at the time of writing. Prices, opening hours, road
	              conditions, visa rules and safety situations change. Always check official sources before you travel.
	              I am not responsible for losses or injuries resulting from use of the information on this site.
	            </p>

	            <h2>User accounts and comments</h2>
	            <p>
	              If you create an account or comment, you are responsible for what you post. Do not post anything illegal,
	              abusive, misleading, spam, or that infringes others' rights. I may edit or remove comments and close accounts
	              that break these rules.
	            </p>

	            <h2>Guest contributions</h2>
	            <p>
	              Guest posts are accepted only under the <a href="{{ url('/write-for-us') }}">Write For Us</a> guidelines.
	              Contributors confirm their work is original and grant this site a licence to publish and edit it.
	              Links in guest posts may be marked nofollow or sponsored.
	            </p>

	            <h2>Third-party links</h2>
	            <p>
	              The site links to other websites and booking platforms. I do not control them and am not responsible for
	              their content, prices or practices.
	            </p>

	            <h2>Privacy</h2>
	            <p>
	              How I collect and use personal information is explained in the
	              <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>.
	            </p>

	            <h2>Changes and contact</h2>
	            <p>
	              These terms may change; the date above shows the latest version.
	              Contact: <a href="mailto:contact@rahaal-theexplorer.com">contact@rahaal-theexplorer.com</a>.
	            </p>

	          </div>
	        </div>
	      </div>

	    </section><!-- /Terms of Use Section -->

	  </main>
@endsection
