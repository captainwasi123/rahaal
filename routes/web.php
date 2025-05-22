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
    Route::get('/collaborate', 'WebController@collaborate')->name('collaborate');
    Route::get('/faq', 'WebController@faq')->name('faq');
    Route::get('/about-us', 'WebController@about')->name('about');
    Route::get('/reach-out', 'WebController@contact')->name('reach-out');
    Route::get('/privacy-policy', 'WebController@privacyPolicy')->name('privacy');
    Route::get('/terms-conditions', 'WebController@termsCondition')->name('terms');
    Route::get('/client-case-studies', 'WebController@caseStudies')->name('caseStudies');


    //Episodes
    Route::get('/youtube-episodes', 'EpisodeController@index')->name('episodes');

    //Newsletter
    Route::post('/subscribe', 'NewsletterController@subscribe')->name('newsletter.subscribe');

    //Enquiry
    Route::post('/enquiry', 'EnquiryController@enquiry')->name('enquiry.submit');
    Route::post('/enquiryHelp', 'EnquiryController@enquiryHelp')->name('enquiry.help.submit');

    //Aside
    Route::get('/get-aside', 'WebController@getAside');


    //Experience
    Route::get('/experience', 'BlogController@experience')->name('experience');
    
    //Blogs
    Route::get('/blogs', 'BlogController@index')->name('blogs');
    Route::get('/{blog_slug}', 'BlogController@details')->name('blogs.detail');


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



        
        //Episodes
        Route::prefix('episodes')->group(function () {

            Route::get('/', 'EpisodeController@index')->name('admin.episodes');
            Route::get('/load', 'EpisodeController@load')->name('admin.episodes.load');
            Route::get('/search/{val}', 'EpisodeController@search');
            Route::post('/create', 'EpisodeController@create')->name('admin.episodes.create');
            Route::get('/delete/{id}', 'EpisodeController@delete');
            Route::get('/edit/{id}', 'EpisodeController@edit');
            Route::post('/update', 'EpisodeController@update_blog')->name('admin.episodes.update');

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