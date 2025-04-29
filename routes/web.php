<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\adminAuth;



//sitemap
Route::get('/update-sitemap', function () {
    Artisan::call('app:generate-sitemap');
    $response['success'] = 'success';
    $response['message'] = 'Success! Sitemap Successfully Updated.';
    
    return response()->json($response, 200);
});

//Web 

Route::namespace('App\Http\Controllers\web')->group(function(){
    Route::get('/', 'WebController@index')->name('home');
    //Route::get('/beta', 'WebController@index_beta');
    Route::get('/services', 'WebController@services')->name('services');
    Route::get('/faq', 'WebController@faq')->name('faq');
    Route::get('/about-us', 'WebController@about')->name('about');
    Route::get('/contact-us', 'WebController@contact')->name('contact');
    Route::get('/privacy-policy', 'WebController@privacyPolicy')->name('privacy');
    Route::get('/terms-conditions', 'WebController@termsCondition')->name('terms');
    Route::get('/client-case-studies', 'WebController@caseStudies')->name('caseStudies');

    //Services
        Route::prefix('outdoor-advertising')->group(function(){
            Route::get('/', 'ServiceController@outdoorAdvertising');
            Route::get('/billboards-advertising', 'ServiceController@outdoorAdvertisingAillboardsAdvertising');
            Route::get('/flyers-distribution', 'ServiceController@outdoorAdvertisingFlyersDistribution');
            Route::get('/human-billboards', 'ServiceController@outdoorAdvertisingHumanBillboards');
        });

        Route::prefix('digital-advertising')->group(function(){
            Route::get('/', 'ServiceController@digitalAdvertising');
            Route::get('/ott-advertising', 'ServiceController@digitalAdvertisingOTTAdvertising');
            Route::get('/dooh-advertising', 'ServiceController@digitalAdvertisingDOOHAdvertising');
            Route::get('/hotel-digital-screens-advertising', 'ServiceController@digitalAdvertisingHotelAdvertising');
            Route::get('/elevator-advertising', 'ServiceController@digitalAdvertisingElevetorAdvertising');
        });

        Route::prefix('public-relations-pr-coverage')->group(function(){
            Route::get('/', 'ServiceController@prCoverage');
            Route::get('/gulf-news', 'ServiceController@prCoverageGulfNews');
            Route::get('/forbes', 'ServiceController@prCoverageForbes');
            Route::get('/khaleej-time', 'ServiceController@prCoverageKhaleejTime');
            Route::get('/arabian-news', 'ServiceController@prCoverageArabianNews');
        });

        Route::prefix('celebrity-marketing')->group(function(){
            Route::get('/', 'ServiceController@celebrityMarketing');
            Route::get('/sport-personalities', 'ServiceController@celebrityMarketingSport');
            Route::get('/bollywood-celebrities', 'ServiceController@celebrityMarketingBollywood');
        });

        Route::prefix('influencer-marketing')->group(function(){
            Route::get('/', 'ServiceController@influencerMarketing');
            Route::get('/nano-influencer', 'ServiceController@influencerMarketingNano');
            Route::get('/micro-influencer', 'ServiceController@influencerMarketingMicro');
            Route::get('/macro-influencer', 'ServiceController@influencerMarketingMacro');
        });

        Route::prefix('event-marketing')->group(function(){
            Route::get('/', 'ServiceController@eventMarketing');
            Route::get('/corporate-events', 'ServiceController@eventMarketingCorporate');
            Route::get('/private-events', 'ServiceController@eventMarketingPrivate');
        });

        Route::prefix('transit-media')->group(function(){
            Route::get('/', 'ServiceController@transitMedia');
            Route::get('/airline-advertising', 'ServiceController@transitMediaAirline');
            Route::get('/taxi-advertising', 'ServiceController@transitMediaTaxi');
            Route::get('/bus-advertising', 'ServiceController@transitMediaBus');
        });

        Route::prefix('lead-generation')->group(function(){
            Route::get('/', 'ServiceController@leadGeneration');
            Route::get('/cost-per-lead', 'ServiceController@leadGenerationCPL');
        });

        Route::prefix('sponsorships')->group(function(){
            Route::get('/', 'ServiceController@sponsorships');
            Route::get('/corporate', 'ServiceController@sponsorshipsCorporate');
            Route::get('/entertainment', 'ServiceController@sponsorshipsEntertainment');
        });

        Route::prefix('creative-and-cgi-advertising')->group(function(){
            Route::get('/', 'ServiceController@cgiAdvertising');
            Route::get('/creative', 'ServiceController@cgiAdvertisingCreative');
        });
        Route::get('/radio-advertising', 'ServiceController@radioAdvertising');


    //Newsletter
    Route::post('/subscribe', 'NewsletterController@subscribe')->name('newsletter.subscribe');

    //Enquiry
    Route::post('/enquiry', 'EnquiryController@enquiry')->name('enquiry.submit');
    Route::post('/enquiryHelp', 'EnquiryController@enquiryHelp')->name('enquiry.help.submit');

    //Aside
    Route::get('/get-aside', 'WebController@getAside');

    //Blogs
    Route::get('/blogs', 'BlogController@index')->name('blogs');
    Route::get('/blogs/{slug}', 'BlogController@category');
    Route::get('/{blog_slug}', 'BlogController@details')->name('blogs.detail');
    Route::get('/tag/{slug}', 'BlogController@tags');
});


//Administration

Route::prefix('admin/panel')->namespace('App\Http\Controllers\admin')->group(function () {

    //Authentication
    Route::get('/login', 'LoginController@index')->name('admin.login');
    Route::post('/login', 'LoginController@authenticate');
    Route::get('/logout', 'LoginController@logout')->name('admin.logout');


    //Authenticated
    Route::middleware([adminAuth::class])->group(function () {
        Route::get('/', 'MainController@index')->name('admin.dashboard');


        
        //Blogs
        Route::prefix('blogs')->group(function () {

            Route::get('/', 'BlogController@index')->name('admin.blog');
            Route::get('/load', 'BlogController@load')->name('admin.blog.load');
            Route::get('/search/{val}', 'BlogController@search');
            Route::post('/create', 'BlogController@create')->name('admin.blog.create');
            Route::get('/delete/{id}', 'BlogController@delete');
            Route::get('/edit/{id}', 'BlogController@edit');
            Route::post('/update', 'BlogController@update_blog')->name('admin.blog.update');

        });


        Route::prefix('author')->group(function () {

            Route::get('/', 'AuthorController@index')->name('admin.author');
            Route::post('/create', 'AuthorController@create')->name('admin.author.create');
            Route::get('/load', 'AuthorController@load')->name('admin.author.load');
            Route::get('/edit/{id}', 'AuthorController@edit');
            Route::get('/delete/{id}', 'AuthorController@delete');
        });


        //SEO Tools
        Route::prefix('seo')->group(function () {
            Route::prefix('meta')->group(function () {
                Route::get('/', 'SeoController@meta')->name('admin.seo.meta');
                Route::post('/check', 'SeoController@meta_check')->name('admin.seo.meta.check');
                Route::post('/update', 'SeoController@meta_update')->name('admin.seo.meta.update');
            });
            Route::prefix('snippet')->group(function () {
                Route::get('/', 'SeoController@snippet')->name('admin.seo.snippet');
                Route::get('/load', 'SeoController@snippet_load')->name('admin.seo.snippet.load');
                Route::post('/create', 'SeoController@snippet_create')->name('admin.seo.snippet.create');
                Route::get('/delete/{id}', 'SeoController@snippet_delete');
                Route::get('/edit/{id}', 'SeoController@snippet_edit');
                Route::post('/update', 'SeoController@snippet_update')->name('admin.seo.snippet.update');
            });
        });


        //Newsletter
        Route::prefix('newsletter')->group(function () {
            Route::get('/', 'NewsletterController@index')->name('admin.newsletter');
            Route::get('/load', 'NewsletterController@load')->name('admin.newsletter.load');
            Route::post('/filter', 'NewsletterController@user_filter')->name('admin.newsletter.filter');
            Route::post('/export', 'NewsletterController@user_export')->name('admin.newsletter.export');
        });
    });
});