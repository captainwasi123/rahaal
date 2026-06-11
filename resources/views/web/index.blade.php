<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Rahaal – The Explorer</title>
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Bebas+Neue&family=Raleway:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"/>
<link href="https://api.mapbox.com/mapbox-gl-js/v3.3.0/mapbox-gl.css" rel="stylesheet"/>
<script src="https://api.mapbox.com/mapbox-gl-js/v3.3.0/mapbox-gl.js"></script>
<style>
  :root {
    --green: #2ecc71;
    --green-dark: #1a9e52;
    --green-glow: rgba(46,204,113,0.3);
    --teal: #0e9e8a;
    --navy: #0a0f1e;
    --navy2: #0d1526;
    --navy3: #111d35;
    --card-bg: rgba(13,21,38,0.85);
    --gold: #c9a84c;
    --text: #e8f0fe;
    --text-muted: #8ba0c0;
    --border: rgba(46,204,113,0.18);
    --font-display: 'Cinzel Decorative', serif;
    --font-heading: 'Bebas Neue', sans-serif;
    --font-body: 'Raleway', sans-serif;
    --font-serif: 'Playfair Display', serif;
    --sidebar-w: 340px;
    --radius: 16px;
    --transition: 0.3s cubic-bezier(.4,0,.2,1);
  }
=======
@extends('web.includes.master')
@section('metaAddition')

@endsection

@section('addStyle')

	<link href="{{URL::to('/public')}}/assets/css/gauge.css" rel="stylesheet">
	<style>
		.header{
			background-color: transparent;
			padding: 15px 35px;
			box-shadow: none;
		}
		.hero{
			min-height: 101vh;
			margin-top: -89px;
		}
		.navmenu a, .navmenu a:focus{
			color: #fff;
		}
		.navmenu li:hover>a, .navmenu .active, .navmenu .active:focus {
        border-bottom: 1px solid #ffffff;
    }
    .hero-main-content h2 {
		    background-color: #ffffff40;
		    color: #83c341 !important;
		    position: relative;
		    width: fit-content;
		    margin: auto;
		    margin-top: -80px;
		    font-size: 42px;
		    padding: 1px 18px;
		    border-radius: 7px;
		}
		.hero-main-content img{
			animation: pop 4s ease-in-out infinite;
		}

		.brand-logo-white{
		    display: block;
		}		
		.brand-logo-dark{
		    display: none;
		}
		.header-search {
		    background-color: transparent;
		    color: #fff;
		    border-color: #fff !important;
		    font-size: 16px !important;
		}

		.dark-header.header{
			background-color: #e9e8e6;
			box-shadow: 0px 0 18px rgba(0, 0, 0, 0.1);
		}
		.dark-header .navmenu a, .dark-header .navmenu a:focus{
			color: #444444;
		}
		.dark-header .brand-logo-white{
		    display: none;
		}		
		.dark-header .brand-logo-dark{
		    display: block;
		}
		.dark-header .header-search {
		    color: #444444;
		    border-color: #444444 !important;
		}
		.about-section{
			background-image: url('{{URL::to("/public/assets/img/about/bg.png")}}');
			background-size: cover;
			background-position: bottom;
		}
		.mobile-nav-toggle{
			color: #fff;
		}

		.dark-header .mobile-nav-toggle{
			color: #444444;
		}
		.yt-section{
			background-image: url('{{URL::to("/public/assets/img/yt-bg.jpg")}}');
			background-size: cover;
			background-position: bottom;
		}




		@media (max-width: 780px) {
			.header{
				padding: 15px 0 !important;
			}
			.hero-main-content img {
			    width: 70%;
			}
			.hero-main-content h2{
				    color: #83c341 !important;
				    margin-top: -50px;
    				font-size: 32px;
			}
			.hero-main-content p {
			    color: #fff !important;
			    margin-top: 30px;
			    margin-bottom: -60px;
			}

			.hero{
				min-height: 104vh;
			}
			h2.text-wild-trails{
				font-size: 18px;
			}
			.navmenu a, .navmenu a:focus {
			    color: #000000;
			}
			.header-search {
			    color: transparent;
			    border: none !important;
			}
			.header-search i {
			    color: #ffffff;
			}
			.dark-header .header-search i {
			    color: #444444;
			}
			.header-search span {
			    display: none;
			}
			.about-support a{
				padding: 8px 16px;
			}
		}
	</style>
@endsection
>>>>>>> 7a5a5628b0deba30815a0e08931f7e411ed8e582

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  html { scroll-behavior: smooth; }

<<<<<<< HEAD
  body {
    font-family: var(--font-body);
    background: var(--navy);
    color: var(--text);
    overflow-x: hidden;
    min-height: 100vh;
  }
=======
	      <img src="{{URL::to('/public')}}/assets/img/bg.jpg" class="hero-background" alt="" data-aos="fade-in">
	      <img src="{{URL::to('/public')}}/assets/img/hero-forground.png" class="hero-background" alt="" data-aos="fade-in">
	        
	      <div class="row hero-main-content">
	      	<div class="col-lg-12 text-center">
	      		<img src="{{URL::to('/public')}}/assets/img/hero-picture.png" width="420px" alt="" >
	      		<h2 class="text-theme2 text-shadow text-thorn text-center">Rahaal - The Explorer</h2>

	            <p class="text-shadow text-white home-para text-center" style="max-width: 720px;">
	              I’m a travel filmmaker capturing raw human stories and the soul of places—beyond tourist trails, with authenticity and emotion.
	            </p>
	            <a href="https://www.youtube.com/@rahaal_01" target="_blank" class="btn-get-started text-secrets text-shadow text-center"><i class="bi bi-youtube"></i> Watch My Journey</a>
	      	</div>
	      </div>

	        <!-- <div class="row hero-content">
	          <div class="col-lg-12">
	          	<span class="text-white">Welcome to </span>
	            <h2 class="text-theme2 text-shadow text-thorn">Rahaal - The Explorer</h2>
	            <p class="text-shadow text-white home-para" style="max-width: 520px;">
	              I'm a travel filmmaker on a mission to explore the world, tell raw human stories, and uncover the unseen. Through my lens, I capture the soul of places and people—beyond tourist trails and curated views. From remote mountain villages to vibrant city backstreets, every journey is an opportunity to connect with authenticity, culture, and emotion.
	            </p>
	            <a href="https://www.youtube.com/@rahaal_01" target="_blank" class="btn-get-started text-secrets text-shadow"><i class="bi bi-youtube"></i> Watch My Journey</a>
	          </div>
	        </div> -->
>>>>>>> 7a5a5628b0deba30815a0e08931f7e411ed8e582

  /* ─── NAVBAR ─── */
  nav {
    position: fixed; top: 0; left: 0; width: 100%; z-index: 1000;
    display: flex; align-items: center; justify-content: space-between;
    padding: 0 2.5rem;
    height: 68px;
    background: rgba(10,15,30,0.92);
    backdrop-filter: blur(14px);
    border-bottom: 1px solid var(--border);
  }
  .nav-logo {
    font-family: var(--font-display);
    font-size: 1.1rem;
    color: var(--green);
    letter-spacing: 0.04em;
    text-decoration: none;
  }
  .nav-logo span { color: var(--gold); }
  .nav-links { display: flex; gap: 2rem; list-style: none; }
  .nav-links a {
    font-family: var(--font-body);
    font-weight: 600;
    font-size: 0.78rem;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--text-muted);
    text-decoration: none;
    transition: color var(--transition);
    position: relative;
    padding-bottom: 3px;
  }
  .nav-links a::after {
    content: '';
    position: absolute; bottom: 0; left: 0; width: 0; height: 1.5px;
    background: var(--green);
    transition: width var(--transition);
  }
  .nav-links a:hover { color: var(--green); }
  .nav-links a:hover::after { width: 100%; }
  .nav-actions { display: flex; gap: 1rem; align-items: center; }
  .btn-outline {
    padding: 0.45rem 1.2rem;
    border: 1.5px solid var(--green);
    color: var(--green);
    background: transparent;
    border-radius: 6px;
    font-family: var(--font-body);
    font-size: 0.78rem;
    font-weight: 600;
    letter-spacing: 0.1em;
    cursor: pointer;
    transition: all var(--transition);
    text-decoration: none;
  }
  .btn-outline:hover { background: var(--green); color: var(--navy); }
  .hamburger { display: none; flex-direction: column; gap: 5px; cursor: pointer; }
  .hamburger span { display: block; width: 24px; height: 2px; background: var(--green); border-radius: 2px; transition: all var(--transition); }

<<<<<<< HEAD
  /* ─── HERO ─── */
  #hero {
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    padding-top: 68px;
    padding-bottom: 0 !important;
  }
=======
	    <!-- About Section -->
	    <section id="about" class="about section-padding section about-section">
>>>>>>> 7a5a5628b0deba30815a0e08931f7e411ed8e582

  /* SIDEBAR */
  .hero-sidebar {
    position: relative; z-index: 10;
    width: var(--sidebar-w);
    min-width: var(--sidebar-w);
    height: 100%;
    background: linear-gradient(180deg, rgba(10,15,30,0.97) 0%, rgba(10,20,42,0.95) 100%);
    border-right: 1px solid var(--border);
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 2.5rem 1.8rem 2rem;
    overflow-y: auto;
    scrollbar-width: none;
  }
  .hero-sidebar::-webkit-scrollbar { display: none; }

<<<<<<< HEAD
  .sidebar-avatar-wrap {
    position: relative;
    width: 120px; height: 120px;
    margin-bottom: 1.2rem;
  }
  .sidebar-avatar {
    width: 120px; height: 120px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid var(--green);
    background: var(--navy3);
    display: flex; align-items: center; justify-content: center;
    overflow: hidden;
  }
  .sidebar-avatar img { width: 100%; height: 100%; object-fit: cover; }
  .avatar-placeholder {
    width: 120px; height: 120px; border-radius: 50%;
    border: 3px solid var(--green);
    background: linear-gradient(135deg, var(--navy3), #1a2d4a);
    display: flex; flex-direction: column; align-items: center; justify-content: center;
    color: var(--green);
    font-size: 2.5rem;
    position: relative;
  }
  .avatar-ring {
    position: absolute; inset: -8px;
    border-radius: 50%;
    border: 2px dashed rgba(46,204,113,0.3);
    animation: spin 20s linear infinite;
  }
  @keyframes spin { to { transform: rotate(360deg); } }
=======
	        <div class="row gy-4 justify-content-center">
	          
	          <div class="col-lg-7 content content-end">
            	<h2 class="text-wild-trails text-wood text-shadow">ABOUT RAHAAL</h2>
            	<br>
	            <div>
								I'm <strong>Rahaal</strong>, a travel filmmaker and storyteller passionate about documenting the world’s raw beauty. Rahaal means <strong>“traveler”</strong> in Arabic/Urdu—a fitting name for a journey driven by curiosity and connection.
								<br><br>
								I believe travel is not about ticking boxes—it's about being present, learning from people, and embracing the unknown. Through my camera and my words, I aim to inspire others to explore beyond comfort zones and to see places with empathy and open eyes.
								<div class="flex about-support">
									<a href="{{route('collaborate')}}" target="_blank">
										<i class="bi bi-hand-thumbs-up"></i> Collaboration
									</a>
									<a href="https://www.paypal.com/paypalme/rahaal01" target="_blank">
										<i class="bi bi-paypal"></i> Support via Paypal
									</a>
								</div>
								<strong>Get to know the person behind the lens.</strong>
								<br>
								Follow my journey on social media for daily updates and behind-the-scenes moments.
								<br><br><br>
							</div>
	          </div>
	          <div class="col-lg-5">
		            <img src="{{URL::to('/public/assets/img/about/pic.png')}}" width="100%" alt="About me">
	          	
	          </div>
	        </div>
>>>>>>> 7a5a5628b0deba30815a0e08931f7e411ed8e582

  .sidebar-name {
    font-family: var(--font-display);
    font-size: 1rem;
    color: var(--green);
    text-align: center;
    line-height: 1.3;
    margin-bottom: 0.4rem;
    letter-spacing: 0.03em;
  }
  .sidebar-tagline {
    font-family: var(--font-serif);
    font-style: italic;
    font-size: 0.78rem;
    color: var(--text-muted);
    text-align: center;
    line-height: 1.6;
    margin-bottom: 1.5rem;
    padding: 0 0.5rem;
  }

  .sidebar-divider {
    width: 60%; height: 1px;
    background: linear-gradient(90deg, transparent, var(--green), transparent);
    margin: 0.8rem auto 1.2rem;
  }

  .sidebar-stats {
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 0.7rem; width: 100%; margin-bottom: 1.4rem;
  }
  .stat-card {
    background: rgba(46,204,113,0.06);
    border: 1px solid var(--border);
    border-radius: 10px;
    padding: 0.8rem 0.5rem;
    text-align: center;
  }
  .stat-card .num {
    font-family: var(--font-heading);
    font-size: 1.5rem;
    color: var(--green);
    line-height: 1;
  }
  .stat-card .lbl {
    font-size: 0.65rem;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--text-muted);
    margin-top: 0.2rem;
  }

  .sidebar-socials {
    display: flex; gap: 0.8rem; margin-bottom: 1.5rem;
  }
  .social-btn {
    width: 36px; height: 36px; border-radius: 50%;
    border: 1.5px solid var(--border);
    display: flex; align-items: center; justify-content: center;
    color: var(--text-muted);
    text-decoration: none;
    font-size: 0.85rem;
    transition: all var(--transition);
    background: rgba(255,255,255,0.03);
  }
  .social-btn:hover { border-color: var(--green); color: var(--green); background: var(--green-glow); transform: translateY(-2px); }

  .sidebar-cta {
    display: flex; flex-direction: column; gap: 0.7rem; width: 100%;
    margin-bottom: 1.5rem;
  }
  .btn-primary {
    display: flex; align-items: center; justify-content: center; gap: 0.6rem;
    padding: 0.75rem 1rem;
    background: linear-gradient(135deg, var(--green), var(--teal));
    color: var(--navy);
    border: none; border-radius: 10px;
    font-family: var(--font-body);
    font-weight: 700;
    font-size: 0.82rem;
    letter-spacing: 0.06em;
    text-decoration: none;
    cursor: pointer;
    transition: all var(--transition);
    box-shadow: 0 4px 20px rgba(46,204,113,0.25);
  }
  .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 8px 28px rgba(46,204,113,0.4); }

  .sidebar-explore-label {
    font-size: 0.65rem;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: var(--text-muted);
    text-align: center;
    margin-bottom: 0.5rem;
  }
  .location-pulse {
    display: flex; align-items: center; gap: 0.6rem;
    background: rgba(46,204,113,0.07);
    border: 1px solid var(--border);
    border-radius: 8px;
    padding: 0.6rem 0.9rem;
    font-size: 0.78rem;
    color: var(--text);
  }
  .pulse-dot {
    width: 8px; height: 8px; border-radius: 50%;
    background: var(--green);
    box-shadow: 0 0 0 0 var(--green-glow);
    animation: pulse 2s infinite;
  }
  @keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(46,204,113,0.6); }
    70% { box-shadow: 0 0 0 10px rgba(46,204,113,0); }
    100% { box-shadow: 0 0 0 0 rgba(46,204,113,0); }
  }

  /* MAP */
  .hero-map {
    flex: 1;
    position: relative;
    height: 100%;
    background-image: url('https://rahaal-theexplorer.com/public/assets/img/bg.jpg');
  }
  #map {
    width: 100%; height: 100%;
  }
  .map-overlay-top {
    position: absolute; top: 1.5rem; left: 1.5rem;
    background: rgba(10,15,30,0.82);
    backdrop-filter: blur(10px);
    border: 1px solid var(--border);
    border-radius: 12px;
    padding: 0.7rem 1.2rem;
    font-size: 0.72rem;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--text-muted);
    z-index: 5;
    display: flex; align-items: center; gap: 0.6rem;
  }
  .map-overlay-top i { color: var(--green); }

  /* MAP POPUP */
  .mapboxgl-popup-content {
    background: rgba(10,15,30,0.97) !important;
    border: 1px solid var(--border) !important;
    border-radius: 14px !important;
    padding: 0 !important;
    box-shadow: 0 20px 60px rgba(0,0,0,0.6) !important;
    overflow: hidden;
    min-width: 220px;
  }
  .mapboxgl-popup-tip { border-top-color: rgba(46,204,113,0.4) !important; }
  .mapboxgl-popup-close-button {
    color: var(--text-muted) !important;
    font-size: 1.1rem !important;
    top: 6px !important; right: 8px !important;
  }

  .popup-img {
    width: 100%; height: 130px;
    object-fit: cover;
    display: block;
    background: linear-gradient(135deg, #1a2d4a 0%, #0e9e8a33 100%);
  }
  .popup-img-placeholder {
    width: 100%; height: 130px;
    background: linear-gradient(135deg, #1a2d4a 0%, rgba(14,158,138,0.3) 100%);
    display: flex; align-items: center; justify-content: center;
    font-size: 2.5rem; color: var(--green);
  }
  .popup-img-placeholder img {
      width: 100%;
      height: 130px;
      object-fit: cover;
  }
  .popup-body { padding: 0.9rem 1rem 1rem; }
  .popup-title {
    font-family: var(--font-heading);
    font-size: 1.05rem;
    letter-spacing: 0.06em;
    color: var(--text);
    margin-bottom: 0.3rem;
  }
  .popup-country {
    font-size: 0.7rem;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    color: var(--green);
    margin-bottom: 0.6rem;
  }
  .popup-meta {
    display: flex; gap: 1rem;
    font-size: 0.7rem;
    color: var(--text-muted);
  }
  .popup-meta i { color: var(--green); margin-right: 0.25rem; }

  /* GREEN FLAG MARKER */
  .flag-marker {
    cursor: pointer;
    transition: transform 0.2s;
  }
  .flag-marker:hover { transform: scale(1.2); }

  /* ─── SECTIONS COMMON ─── */
  section { padding: 6rem 0; }
  .container { max-width: 1200px; margin: 0 auto; padding: 0 2rem; }

  .section-label {
    font-size: 0.7rem;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--green);
    margin-bottom: 0.6rem;
    font-weight: 600;
  }
  .section-title {
    font-family: var(--font-heading);
    font-size: clamp(2rem, 4vw, 3.2rem);
    letter-spacing: 0.05em;
    color: var(--text);
    margin-bottom: 0.8rem;
  }
  .section-title span { color: var(--green); }
  .section-sub {
    font-size: 0.9rem;
    color: var(--text-muted);
    line-height: 1.7;
    max-width: 580px;
  }
  .section-head { margin-bottom: 3rem; }
  .section-head.center { text-align: center; }
  .section-head.center .section-sub { margin: 0 auto; }

  /* ─── ABOUT ─── */
  #about { 
    position: relative;
    overflow: hidden;
    color: white;
  }
  #about::before {
    content: "";
    position: absolute;
    inset: 0;

    background-image: url('https://rahaal-theexplorer.com/public/assets/img/bg.jpg');
    background-size: cover;
    background-position: center;

    opacity: 0.3; /* IMAGE OPACITY */

    z-index: 0;
  }
  .about-grid {
    display: grid;
    grid-template-columns: 1fr 420px;
    gap: 5rem;
    align-items: center;
  }
  .about-text p {
    font-size: 0.95rem;
    color: var(--text-muted);
    line-height: 1.85;
    margin-bottom: 1.2rem;
  }
  .about-text p strong { color: var(--green); font-weight: 600; }
  .about-actions { display: flex; gap: 1rem; margin-top: 2rem; flex-wrap: wrap; }
  .about-img-wrap {
    position: relative;
  }
  .about-img-frame {
    border-radius: 20px;
    overflow: hidden;
    position: relative;
    aspect-ratio: 4/5;
    display: flex; align-items: center; justify-content: center;
  }
  .about-img-frame i { font-size: 5rem; color: rgba(46,204,113,0.2); }
  .about-badge {
    position: absolute; bottom: -1.5rem; left: -1.5rem;
    background: linear-gradient(135deg, var(--green), var(--teal));
    color: var(--navy);
    border-radius: 14px;
    padding: 1rem 1.5rem;
    font-family: var(--font-heading);
    font-size: 1rem;
    letter-spacing: 0.06em;
    box-shadow: 0 8px 30px rgba(46,204,113,0.35);
  }
  .about-badge span { display: block; font-family: var(--font-body); font-size: 0.7rem; font-weight: 600; opacity: 0.7; margin-top: 2px; letter-spacing: 0.1em; }

  /* ─── EPISODES ─── */
  #episodes { background: var(--navy); }
  .episodes-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
    gap: 1.5rem;
  }
  .ep-card {
    background: var(--card-bg);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    overflow: hidden;
    transition: all var(--transition);
    cursor: pointer;
    group: true;
  }
  .ep-card:hover { transform: translateY(-6px); border-color: rgba(46,204,113,0.4); box-shadow: 0 20px 50px rgba(0,0,0,0.4); }
  .ep-thumb {
    width: 100%; aspect-ratio: 16/9;
    background: linear-gradient(135deg, #1a2d4a 0%, rgba(14,158,138,0.25) 100%);
    display: flex; align-items: center; justify-content: center;
    position: relative; overflow: hidden;
    font-size: 2rem; color: rgba(46,204,113,0.3);
  }
  .ep-thumb::after {
    content: '';
    position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(10,15,30,0.8) 0%, transparent 60%);
  }
  .ep-play {
    position: absolute; z-index: 2;
    width: 44px; height: 44px; border-radius: 50%;
    background: rgba(46,204,113,0.85);
    display: flex; align-items: center; justify-content: center;
    color: var(--navy); font-size: 1rem;
    opacity: 0; transition: opacity var(--transition);
  }
  .ep-card:hover .ep-play { opacity: 1; }
  .ep-info { padding: 1rem 1.1rem 1.2rem; }
  .ep-tag {
    display: inline-block;
    font-size: 0.62rem;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--green);
    background: rgba(46,204,113,0.1);
    border-radius: 4px;
    padding: 0.2rem 0.5rem;
    margin-bottom: 0.5rem;
  }
  .ep-title {
    font-family: var(--font-body);
    font-weight: 600;
    font-size: 0.9rem;
    color: var(--text);
    line-height: 1.4;
    margin-bottom: 0.5rem;
  }
  .ep-date { font-size: 0.72rem; color: var(--text-muted); }

<<<<<<< HEAD
  /* ─── BLOGS ─── */
  #blogs { 
    position: relative;
    overflow: hidden;
    color: white;
  }
  #blogs::before {
    content: "";
    position: absolute;
    inset: 0;

    background-image: url('https://rahaal-theexplorer.com/public/assets/img/bg.jpg');
    background-size: cover;
    background-position: center;

    opacity: 0.3; /* IMAGE OPACITY */

    z-index: 0;
  }
  .blogs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 1.5rem;
  }
  .blog-card {
    background: var(--card-bg);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    overflow: hidden;
    transition: all var(--transition);
    display: flex; flex-direction: column;
  }
  .blog-card:hover { transform: translateY(-5px); box-shadow: 0 20px 50px rgba(0,0,0,0.35); border-color: rgba(46,204,113,0.35); }
  .blog-thumb {
    height: 160px;
    background: linear-gradient(135deg, #0d1a30, #1a4a3a);
    display: flex; align-items: center; justify-content: center;
    font-size: 2rem; color: rgba(46,204,113,0.25);
    position: relative; overflow: hidden;
  }
  .blog-thumb-icon { position: relative; z-index: 1; }
  .blog-thumb::before {
    content: attr(data-icon);
    position: absolute; font-size: 6rem; opacity: 0.06; transform: rotate(-10deg);
  }
  .blog-body { padding: 1.2rem; flex: 1; display: flex; flex-direction: column; }
  .blog-cat {
    font-size: 0.62rem; text-transform: uppercase; letter-spacing: 0.12em;
    color: var(--teal); font-weight: 600; margin-bottom: 0.5rem;
  }
  .blog-title {
    font-family: var(--font-body);
    font-weight: 700;
    font-size: 0.9rem;
    color: var(--text);
    line-height: 1.45;
    margin-bottom: 0.5rem;
    flex: 1;
  }
  .blog-desc { font-size: 0.78rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0.8rem; }
  .blog-date { font-size: 0.68rem; color: var(--text-muted); }

  /* ─── STATS ─── */
  #stats { background: var(--navy); position: relative; overflow: hidden; }
  #stats::before {
    content: '';
    position: absolute; inset: 0;
    background: radial-gradient(ellipse 60% 80% at 50% 0%, rgba(46,204,113,0.07) 0%, transparent 70%);
  }
  .stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
    position: relative;
  }
  .stat-box {
    text-align: center;
    padding: 2.5rem 1rem;
    background: var(--card-bg);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    transition: all var(--transition);
  }
  .stat-box:hover { border-color: var(--green); transform: translateY(-4px); }
  .stat-num {
    font-family: var(--font-heading);
    font-size: clamp(2.5rem, 4vw, 3.8rem);
    color: var(--green);
    letter-spacing: 0.05em;
    line-height: 1;
    margin-bottom: 0.5rem;
  }
  .stat-suffix { color: var(--gold); }
  .stat-label {
    font-size: 0.72rem;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: var(--text-muted);
    font-weight: 600;
  }
  .stat-icon { font-size: 1.4rem; color: rgba(46,204,113,0.35); margin-bottom: 0.8rem; }

  /* ─── CONTACT ─── */
  #contact { 
    position: relative;
    overflow: hidden;
    color: white;
  }
  #contact::before {
    content: "";
    position: absolute;
    inset: 0;

    background-image: url('https://rahaal-theexplorer.com/public/assets/img/bg.jpg');
    background-size: cover;
    background-position: center;

    opacity: 0.3; /* IMAGE OPACITY */

    z-index: 0;
  }
  .contact-wrap {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 5rem;
    align-items: start;
  }
  .contact-info h2 { margin-bottom: 1rem; }
  .contact-info p {
    font-size: 0.9rem;
    color: var(--text-muted);
    line-height: 1.75;
    margin-bottom: 2rem;
  }
  .contact-detail {
    display: flex; align-items: center; gap: 0.8rem;
    font-size: 0.85rem; color: var(--text-muted);
    margin-bottom: 0.8rem;
  }
  .contact-detail i { color: var(--green); width: 20px; }
  .contact-form { display: flex; flex-direction: column; gap: 1rem; }
  .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
  .form-group { display: flex; flex-direction: column; gap: 0.4rem; }
  .form-group label {
    font-size: 0.72rem; text-transform: uppercase; letter-spacing: 0.1em;
    color: var(--text-muted); font-weight: 600;
  }
  .form-group input,
  .form-group textarea {
    background: rgba(255,255,255,0.04);
    border: 1px solid var(--border);
    border-radius: 10px;
    padding: 0.8rem 1rem;
    color: var(--text);
    font-family: var(--font-body);
    font-size: 0.88rem;
    transition: border-color var(--transition);
    resize: vertical;
    outline: none;
  }
  .form-group input:focus,
  .form-group textarea:focus { border-color: var(--green); background: rgba(46,204,113,0.04); }
  .form-group textarea { min-height: 130px; }

  /* ─── FOOTER ─── */
  footer {
    background: var(--navy);
    border-top: 1px solid var(--border);
    padding: 4rem 0 2rem;
  }
  .footer-grid {
    display: grid;
    grid-template-columns: 280px 1fr 1fr 220px;
    gap: 3rem;
    margin-bottom: 3rem;
  }
  .footer-brand p {
    font-size: 0.82rem;
    color: var(--text-muted);
    line-height: 1.7;
    margin: 1rem 0;
  }
  .footer-socials { display: flex; gap: 0.7rem; }
  .footer-col h4 {
    font-family: var(--font-body);
    font-weight: 700;
    font-size: 0.8rem;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--text);
    margin-bottom: 1.2rem;
    padding-bottom: 0.5rem;
    border-bottom: 1px solid var(--border);
  }
  .footer-col ul { list-style: none; display: flex; flex-direction: column; gap: 0.5rem; }
  .footer-col ul a {
    font-size: 0.82rem;
    color: var(--text-muted);
    text-decoration: none;
    transition: color var(--transition);
    display: flex; align-items: center; gap: 0.4rem;
  }
  .footer-col ul a::before { content: '→'; color: var(--green); font-size: 0.7rem; opacity: 0; transition: opacity var(--transition); }
  .footer-col ul a:hover { color: var(--green); }
  .footer-col ul a:hover::before { opacity: 1; }
  .newsletter-input-wrap { display: flex; gap: 0.5rem; margin-top: 0.8rem; }
  .newsletter-input-wrap input {
    flex: 1;
    background: rgba(255,255,255,0.04);
    border: 1px solid var(--border);
    border-radius: 8px;
    padding: 0.6rem 0.8rem;
    color: var(--text);
    font-family: var(--font-body);
    font-size: 0.8rem;
    outline: none;
  }
  .newsletter-input-wrap input:focus { border-color: var(--green); }
  .footer-bottom {
    display: flex; justify-content: space-between; align-items: center;
    padding-top: 2rem;
    border-top: 1px solid var(--border);
    font-size: 0.75rem;
    color: var(--text-muted);
  }
  .footer-bottom a { color: var(--green); text-decoration: none; }

  /* ─── SCROLLBAR ─── */
  ::-webkit-scrollbar { width: 6px; }
  ::-webkit-scrollbar-track { background: var(--navy); }
  ::-webkit-scrollbar-thumb { background: rgba(46,204,113,0.3); border-radius: 3px; }

  /* ─── MOBILE NAV ─── */
  .mobile-menu {
    display: none;
    position: fixed;
    top: 68px; left: 0; right: 0;
    background: rgba(10,15,30,0.98);
    backdrop-filter: blur(14px);
    border-bottom: 1px solid var(--border);
    z-index: 999;
    padding: 1.5rem 2rem 2rem;
    flex-direction: column;
    gap: 1rem;
  }
  .mobile-menu.open { display: flex; }
  .mobile-menu a {
    font-weight: 600; font-size: 0.9rem; letter-spacing: 0.1em;
    text-transform: uppercase; color: var(--text-muted);
    text-decoration: none; padding: 0.5rem 0;
    border-bottom: 1px solid var(--border);
  }
  .mobile-menu a:hover { color: var(--green); }

  /* ─── RESPONSIVE ─── */
  @media (max-width: 1100px) {
    .footer-grid { grid-template-columns: 1fr 1fr; }
    .stats-grid { grid-template-columns: repeat(2,1fr); }
    .about-grid { grid-template-columns: 1fr; }
    .about-img-wrap { max-width: 340px; margin: 0 auto; }
  }
  @media (max-width: 900px) {
    :root { --sidebar-w: 280px; }
    .nav-links { display: none; }
    .hamburger { display: flex; }
    .contact-wrap { grid-template-columns: 1fr; gap: 3rem; }
  }
  @media (max-width: 700px) {
    #hero { flex-direction: column; height: auto; min-height: 100vh; }
    .hero-sidebar { width: 100%; min-width: unset; height: auto; border-right: none; border-bottom: 1px solid var(--border); padding: 2rem 1.5rem; }
    .hero-map { width: 100%; height: 60vw; min-height: 320px; }
    .stats-grid { grid-template-columns: 1fr 1fr; }
    .footer-grid { grid-template-columns: 1fr; gap: 2rem; }
    .form-row { grid-template-columns: 1fr; }
    .episodes-grid, .blogs-grid { grid-template-columns: 1fr; }
  }

  .brand-logo-white {
      width: 130px;
  }
</style>
</head>
<body>

<!-- NAVBAR -->
<nav>
  <a class="nav-logo" href="#"><img src="{{URL::to('/')}}/public/logo-w.png" class="brand-logo-white" alt="Logo"></a>
  <ul class="nav-links">
    <li><a href="{{URL::to('/')}}">Home</a></li>
    <li><a href="{{route('about')}}">About</a></li>
    <li><a href="{{route('vlogs')}}">Vlogs</a></li>
    <li><a href="{{route('blogs')}}">Blogs</a></li>
    <li><a href="{{route('collaborate')}}">Collaborate</a></li>
    <li><a href="{{route('reach-out')}}">Reach Out</a></li>
  </ul>
  <div class="nav-actions">
    <a href="{{route('write-for-us')}}" class="btn-outline">Write For Us</a>
    <div class="hamburger" onclick="toggleMenu()" id="hamburger">
      <span></span><span></span><span></span>
    </div>
  </div>
</nav>
<div class="mobile-menu" id="mobileMenu">
  <a href="#hero" onclick="closeMenu()">Home</a>
  <a href="#about" onclick="closeMenu()">About</a>
  <a href="#episodes" onclick="closeMenu()">Episodes</a>
  <a href="#blogs" onclick="closeMenu()">Blogs</a>
  <a href="#contact" onclick="closeMenu()">Reach Out</a>
</div>

<!-- HERO -->
<section id="hero">
  <!-- LEFT SIDEBAR -->
  <aside class="hero-sidebar">
    <div class="sidebar-avatar-wrap">
      <div class="avatar-placeholder">
        <div class="avatar-ring"></div>
        <img src="https://rahaal-theexplorer.com/public/assets/img/hero-picture.png" width="130px">
      </div>
    </div>

    <div class="sidebar-name">Rahaal<br/>The Explorer</div>
    <div class="sidebar-tagline">
      I'm a travel filmmaker capturing raw human stories and the soul of places—beyond tourist trails, with authenticity and emotion.
    </div>

    <div class="sidebar-divider"></div>

    <div class="sidebar-stats">
      <div class="stat-card"><div class="num">15K+</div><div class="lbl">Subscribers</div></div>
      <div class="stat-card"><div class="num">476K</div><div class="lbl">Total Views</div></div>
      <div class="stat-card"><div class="num">14K+</div><div class="lbl">Watch Hours</div></div>
      <div class="stat-card"><div class="num">40+</div><div class="lbl">Episodes</div></div>
    </div>

    <div class="sidebar-socials">
      <a href="#" class="social-btn"><i class="fab fa-youtube"></i></a>
      <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
      <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
      <a href="#" class="social-btn"><i class="fab fa-tiktok"></i></a>
    </div>

    <div class="sidebar-cta">
      <a href="#episodes" class="btn-primary"><i class="fas fa-play"></i> Watch My Journey</a>
      <a href="#contact" class="btn-outline" style="text-align:center;font-size:0.78rem;padding:0.65rem 1rem;border-radius:10px;">Collaborate With Me</a>
    </div>

    <div class="sidebar-divider"></div>

    <div class="sidebar-explore-label">Currently Exploring</div>
    <div class="location-pulse">
      <div class="pulse-dot"></div>
      <span>Dubai, United Arab Emirates</span>
    </div>
  </aside>

  <!-- MAP -->
  <div class="hero-map">
    <div class="map-overlay-top">
      <i class="fas fa-location-dot"></i>
      Explore Visited Locations — Click Any Flag
    </div>
    <div id="map"></div>
  </div>
</section>

<!-- <section id="about">
  <div class="container">
    <div class="about-grid">
      <div class="about-text">
        <div class="section-label">About Rahaal</div>
        <h2 class="section-title">Behind <span>The Lens</span></h2>
        <p>I'm <strong>Rahaal</strong>, a travel filmmaker and storyteller passionate about documenting the world's raw beauty. Rahaal means <strong>"traveler"</strong> in Arabic/Urdu — a fitting name for a journey driven by curiosity and connection.</p>
        <p>I believe travel is not about ticking boxes — it's about being present, learning from people, and embracing the unknown. Through my camera and my words, I aim to inspire others to explore beyond comfort zones and to see places with empathy and open eyes.</p>
        <p>Follow my journey on social media for daily updates and behind-the-scenes moments. Get to know the person behind the lens.</p>
        <div class="about-actions">
          <a href="#contact" class="btn-primary"><i class="fas fa-handshake"></i> Collaborate</a>
          <a href="#" class="btn-outline"><i class="fab fa-paypal"></i> Support via Paypal</a>
        </div>
      </div>
      <div class="about-img-wrap">
        <div class="about-img-frame">
          <img src="{{URL::to('/')}}/public/about-photo2.png" width="100%">
        </div>
        <div class="about-badge">
          Solo Filmmaker
          <span>3 down, 193 to go. World in progress.</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="episodes">
  <div class="container">
    <div class="section-head center">
      <div class="section-label">Watch Now</div>
      <h2 class="section-title">Latest <span>Episodes</span></h2>
      <p class="section-sub">Each episode is more than just a travel vlog — it's a cinematic story blending raw landscapes, local characters, and immersive experiences.</p>
    </div>
    <div class="episodes-grid">
      <div class="ep-card">
        <div class="ep-thumb">
          <i class="fas fa-motorcycle"></i>
          <div class="ep-play"><i class="fas fa-play"></i></div>
        </div>
        <div class="ep-info">
          <div class="ep-tag">Road Trip</div>
          <div class="ep-title">Dubai to Fujairah on GSX-S1000</div>
          <div class="ep-date"><i class="far fa-calendar" style="color:var(--green);margin-right:4px"></i>12 May 2025</div>
        </div>
      </div>
      <div class="ep-card">
        <div class="ep-thumb">
          <i class="fas fa-hiking"></i>
          <div class="ep-play"><i class="fas fa-play"></i></div>
        </div>
        <div class="ep-info">
          <div class="ep-tag">Adventure</div>
          <div class="ep-title">Escape the City: Mushrif Hiking Trails</div>
          <div class="ep-date"><i class="far fa-calendar" style="color:var(--green);margin-right:4px"></i>28 Apr 2025</div>
        </div>
      </div>
      <div class="ep-card">
        <div class="ep-thumb">
          <i class="fas fa-water"></i>
          <div class="ep-play"><i class="fas fa-play"></i></div>
        </div>
        <div class="ep-info">
          <div class="ep-tag">Underwater</div>
          <div class="ep-title">Scuba Diving in Dubai – Worth It or Not</div>
          <div class="ep-date"><i class="far fa-calendar" style="color:var(--green);margin-right:4px"></i>10 Apr 2025</div>
        </div>
      </div>
      <div class="ep-card">
        <div class="ep-thumb">
          <i class="fas fa-parachute-box"></i>
          <div class="ep-play"><i class="fas fa-play"></i></div>
        </div>
        <div class="ep-info">
          <div class="ep-tag">Extreme</div>
          <div class="ep-title">Skydiving Over Palm Jumeirah – Dubai</div>
          <div class="ep-date"><i class="far fa-calendar" style="color:var(--green);margin-right:4px"></i>22 Mar 2025</div>
        </div>
      </div>
      <div class="ep-card">
        <div class="ep-thumb">
          <i class="fas fa-globe-asia"></i>
          <div class="ep-play"><i class="fas fa-play"></i></div>
        </div>
        <div class="ep-info">
          <div class="ep-tag">Culture</div>
          <div class="ep-title">Global Village Dubai 2025 – Part 2</div>
          <div class="ep-date"><i class="far fa-calendar" style="color:var(--green);margin-right:4px"></i>05 Mar 2025</div>
        </div>
      </div>
      <div class="ep-card">
        <div class="ep-thumb">
          <i class="fas fa-building"></i>
          <div class="ep-play"><i class="fas fa-play"></i></div>
        </div>
        <div class="ep-info">
          <div class="ep-tag">Iconic</div>
          <div class="ep-title">Exploring Burj Park Dubai – Burj Khalifa</div>
          <div class="ep-date"><i class="far fa-calendar" style="color:var(--green);margin-right:4px"></i>18 Feb 2025</div>
        </div>
      </div>
      <div class="ep-card">
        <div class="ep-thumb">
          <i class="fas fa-star"></i>
          <div class="ep-play"><i class="fas fa-play"></i></div>
        </div>
        <div class="ep-info">
          <div class="ep-tag">Event</div>
          <div class="ep-title">Expo City Dubai's Most Mesmerizing Show</div>
          <div class="ep-date"><i class="far fa-calendar" style="color:var(--green);margin-right:4px"></i>01 Feb 2025</div>
        </div>
      </div>
      <div class="ep-card">
        <div class="ep-thumb">
          <i class="fas fa-globe"></i>
          <div class="ep-play"><i class="fas fa-play"></i></div>
        </div>
        <div class="ep-info">
          <div class="ep-tag">Culture</div>
          <div class="ep-title">Global Village Dubai 2025 – Part 1</div>
          <div class="ep-date"><i class="far fa-calendar" style="color:var(--green);margin-right:4px"></i>15 Jan 2025</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="blogs">
  <div class="container">
    <div class="section-head center">
      <div class="section-label">Travel Guides & Insights</div>
      <h2 class="section-title">Latest <span>Blogs</span></h2>
      <p class="section-sub">My blog is your resource for planning unforgettable journeys. Travel guides, hidden locations, tips for budget adventuring, gear reviews, and storytelling insights from my filming expeditions.</p>
    </div>
    <div class="blogs-grid">
      <div class="blog-card">
        <div class="blog-thumb" data-icon="🌱"><i class="fas fa-leaf blog-thumb-icon" style="font-size:2rem;color:rgba(46,204,113,0.4)"></i></div>
        <div class="blog-body">
          <div class="blog-cat">Adventure Tips</div>
          <div class="blog-title">Eco-Friendly Travel Ideas for 2025</div>
          <div class="blog-desc">Discover the best eco-travel ideas for 2025. Explore sustainable motivations, green travel tips, and easy ways to reduce your environmental impact.</div>
          <div class="blog-date"><i class="far fa-calendar" style="color:var(--green);margin-right:4px"></i>Dec 04, 2025</div>
        </div>
      </div>
      <div class="blog-card">
        <div class="blog-thumb" data-icon="🏔"><i class="fas fa-mountain blog-thumb-icon" style="font-size:2rem;color:rgba(46,204,113,0.4)"></i></div>
        <div class="blog-body">
          <div class="blog-cat">Hidden Destinations</div>
          <div class="blog-title">Inspiring Nature Trips to Add to Your 2025 Bucket List</div>
          <div class="blog-desc">Explore inspiring natural bucket-list trips around the world. Discover breathtaking landscapes, rare experiences, and genuinely peaceful destinations for true adventurers.</div>
          <div class="blog-date"><i class="far fa-calendar" style="color:var(--green);margin-right:4px"></i>Dec 04, 2025</div>
        </div>
      </div>
      <div class="blog-card">
        <div class="blog-thumb" data-icon="🌿"><i class="fas fa-compass blog-thumb-icon" style="font-size:2rem;color:rgba(46,204,113,0.4)"></i></div>
        <div class="blog-body">
          <div class="blog-cat">Nature & Wildlife</div>
          <div class="blog-title">Best Hidden Nature Spots in the World</div>
          <div class="blog-desc">Discover the best hidden outdoor destinations around the world. Find secluded forest landscapes, secret escapes and genuinely peaceful wonders for true adventurers.</div>
          <div class="blog-date"><i class="far fa-calendar" style="color:var(--green);margin-right:4px"></i>Dec 04, 2025</div>
        </div>
      </div>
      <div class="blog-card">
        <div class="blog-thumb" data-icon="♻"><i class="fas fa-earth-asia blog-thumb-icon" style="font-size:2rem;color:rgba(46,204,113,0.4)"></i></div>
        <div class="blog-body">
          <div class="blog-cat">Sustainable Travel</div>
          <div class="blog-title">Sustainable Travel Tips for Eco-Adventurers</div>
          <div class="blog-desc">Learn the best sustainable travel tips to reduce your environmental footprint and explore the world responsibly as an eco explorer.</div>
          <div class="blog-date"><i class="far fa-calendar" style="color:var(--green);margin-right:4px"></i>Dec 04, 2025</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="stats">
  <div class="container">
    <div class="section-head center">
      <div class="section-label">YouTube Statistics</div>
      <h2 class="section-title">Crafting Impactful Stories, <span>Backed by Bold Numbers</span></h2>
    </div>
    <div class="stats-grid">
      <div class="stat-box">
        <div class="stat-icon"><i class="fas fa-users"></i></div>
        <div class="stat-num">15K<span class="stat-suffix">+</span></div>
        <div class="stat-label">Subscribers</div>
      </div>
      <div class="stat-box">
        <div class="stat-icon"><i class="fas fa-eye"></i></div>
        <div class="stat-num">476K<span class="stat-suffix">+</span></div>
        <div class="stat-label">Total Views</div>
      </div>
      <div class="stat-box">
        <div class="stat-icon"><i class="fas fa-clock"></i></div>
        <div class="stat-num">14K<span class="stat-suffix">+</span></div>
        <div class="stat-label">Watch Hours</div>
      </div>
      <div class="stat-box">
        <div class="stat-icon"><i class="fas fa-film"></i></div>
        <div class="stat-num">40<span class="stat-suffix">+</span></div>
        <div class="stat-label">Videos Uploaded</div>
      </div>
    </div>
  </div>
</section>

<section id="contact">
  <div class="container">
    <div class="contact-wrap">
      <div class="contact-info">
        <div class="section-label">Let's Connect</div>
        <h2 class="section-title">Get In <span>Touch</span></h2>
        <p>Whether you want to collaborate, sponsor an adventure, or just say hi — I'd love to hear from you.</p>
        <div class="contact-detail"><i class="fas fa-envelope"></i> contact@rahaal-theexplorer.com</div>
        <div class="contact-detail"><i class="fas fa-location-dot"></i> Dubai, United Arab Emirates</div>
        <div class="contact-detail"><i class="fab fa-youtube"></i> youtube.com/@RahaalTheExplorer</div>
        <div style="margin-top:2rem;display:flex;gap:0.8rem;flex-wrap:wrap">
          <a href="#" class="social-btn" style="width:44px;height:44px;font-size:1rem;border-radius:10px"><i class="fab fa-youtube"></i></a>
          <a href="#" class="social-btn" style="width:44px;height:44px;font-size:1rem;border-radius:10px"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-btn" style="width:44px;height:44px;font-size:1rem;border-radius:10px"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-btn" style="width:44px;height:44px;font-size:1rem;border-radius:10px"><i class="fab fa-tiktok"></i></a>
        </div>
      </div>
      <div class="contact-form">
        <div class="form-row">
          <div class="form-group">
            <label>Your Name</label>
            <input type="text" placeholder="Rahaal Ahmed"/>
          </div>
          <div class="form-group">
            <label>Your Email</label>
            <input type="email" placeholder="hello@example.com"/>
          </div>
        </div>
        <div class="form-group">
          <label>Subject</label>
          <input type="text" placeholder="Collaboration Opportunity"/>
        </div>
        <div class="form-group">
          <label>Message</label>
          <textarea placeholder="Tell me about your project or idea…"></textarea>
        </div>
        <button class="btn-primary" style="align-self:flex-start;padding:0.85rem 2.5rem;font-size:0.88rem">
          <i class="fas fa-paper-plane"></i> Send Message
        </button>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="nav-logo" style="font-size:1rem;display:inline-block;margin-bottom:0.5rem"><span>RAHAAL</span> – THE EXPLORER</div>
        <p>Each episode brings a new adventure, a new challenge, and a new perspective. I don't just explore landscapes, I capture emotions, culture, and purpose.</p>
        <div class="footer-socials">
          <a href="#" class="social-btn"><i class="fab fa-youtube"></i></a>
          <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-btn"><i class="fab fa-tiktok"></i></a>
        </div>
      </div>
      <div class="footer-col">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About Me</a></li>
          <li><a href="#episodes">Episodes</a></li>
          <li><a href="#blogs">Blogs</a></li>
          <li><a href="#contact">Reach Out</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Blog Categories</h4>
        <ul>
          <li><a href="#">Adventure Tips</a></li>
          <li><a href="#">Travel Guides</a></li>
          <li><a href="#">Gear & Reviews</a></li>
          <li><a href="#">Hidden Destinations</a></li>
          <li><a href="#">Highlighted Places</a></li>
          <li><a href="#">Food & Dining Experiences</a></li>
          <li><a href="#">Things to Do & Activities</a></li>
          <li><a href="#">Accommodation & Travel Tips</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Newsletter</h4>
        <p style="font-size:0.8rem;color:var(--text-muted);margin-bottom:0.5rem;line-height:1.6">Subscribe for the latest updates from Rahaal's adventures.</p>
        <div class="newsletter-input-wrap">
          <input type="email" placeholder="Enter Your Email"/>
          <button class="btn-primary" style="padding:0.6rem 0.8rem;font-size:0.75rem;white-space:nowrap">Join</button>
        </div>
        <div style="margin-top:1rem;font-size:0.78rem;color:var(--text-muted)">
          <i class="fas fa-envelope" style="color:var(--green);margin-right:6px"></i>contact@rahaal-theexplorer.com
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© Copyright <a href="#">Rahaal – The Explorer</a>. All Rights Reserved.</span>
      <span style="display:flex;gap:1rem">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Use</a>
      </span>
    </div>
  </div>
</footer> -->

<script>
// ─── MOBILE MENU ───
function toggleMenu() {
  const menu = document.getElementById('mobileMenu');
  menu.classList.toggle('open');
}
function closeMenu() {
  document.getElementById('mobileMenu').classList.remove('open');
}

// ─── MAPBOX ───
mapboxgl.accessToken = "{{env('MAPBOX_API')}}";

const locations = [
  @foreach($map as $val)
  { coords: [{{$val->lat}}, {{$val->lng}}], name: "{{$val->title}}", country: "{{$val->country}}", date: "{{$val->img_date}}", images: {{count($val->details)}}, icon: "{{$val->cover_img}}" },
  @endforeach
];

const map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/dark-v11',
  center: [54, 25],
  zoom: 4.8,
  pitch: 45,
  bearing: -10,
  antialias: true,
  projection: 'globe'
});

map.on('style.load', () => {
  map.setFog({
    color: 'rgb(6,10,20)',
    'high-color': 'rgb(20,30,50)',
    'horizon-blend': 0.08
  });
});

map.on('load', () => {

  // 3D buildings
  map.addLayer({
    id: '3d-buildings',
    source: 'composite',
    'source-layer': 'building',
    filter: ['==', 'extrude', 'true'],
    type: 'fill-extrusion',
    minzoom: 10,
    paint: {
      'fill-extrusion-color': '#1a3a2a',
      'fill-extrusion-height': ['get', 'height'],
      'fill-extrusion-base': ['get', 'min_height'],
      'fill-extrusion-opacity': 0.6
    }
  });

  // Add markers
  locations.forEach(loc => {

    const el = document.createElement('div');
    el.className = 'flag-marker';

    el.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="32" viewBox="0 0 24 32">
        <line x1="4" y1="0" x2="4" y2="32" stroke="#2ecc71" stroke-width="2"/>
        <polygon points="4,2 20,8 4,14" fill="#2ecc71" opacity="0.92"/>
        <circle cx="4" cy="32" r="2" fill="#2ecc71" opacity="0.5"/>
      </svg>
    `;

    const popup = new mapboxgl.Popup({
      offset: [12, -10],
      closeButton: true,
      closeOnClick: false,
      maxWidth: '240px'
    }).setHTML(`
      <div class="popup-img-placeholder"><img src="{{URL::to('/public/storage/map')}}/${loc.icon}"></div>
      <div class="popup-body">
        <div class="popup-title">${loc.name}</div>
        <div class="popup-country">${loc.country}</div>
        <div class="popup-meta">
          <span><i class="far fa-calendar"></i>${loc.date}</span>
          <span><i class="fas fa-images"></i>${loc.images} Photos</span>
        </div>
      </div>
    `);

    new mapboxgl.Marker({
      element: el,
      anchor: 'bottom'
    })
      .setLngLat(loc.coords)
      .setPopup(popup)
      .addTo(map);

    el.addEventListener('click', () => {
      map.flyTo({
        center: loc.coords,
        zoom: 6,
        pitch: 50,
        duration: 1200
      });
    });
  });

  // Slow animation
  map.easeTo({
    bearing: 10,
    duration: 60000,
    easing: t => t
  });
});
</script>
</body>
</html>
=======
	    
	    @include('web.includes.elements.lets-connect')
	</main>
@endsection

@section('addScript')
	<script>
		$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();

	     //>=, not <=
	    if (scroll >= 500) {
	        //clearHeader, not clearheader - caps H
	        $("#header").addClass("dark-header");
	    }else if(scroll < 500){
	        $("#header").removeClass("dark-header");
	    }
	});
	</script>
@endsection
>>>>>>> 7a5a5628b0deba30815a0e08931f7e411ed8e582
