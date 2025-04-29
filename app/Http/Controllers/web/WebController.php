<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Services;

class WebController extends Controller
{
    public function index(){
        $data['nav'] = 'home';
        $data['sub_footer'] = 'visible';
        
        return view('web.index')->with($data);
    }
    public function index_beta(){
        $data['nav'] = 'home';
        $data['services'] = Services::where('parent_id', '0')->get();
        $data['sub_footer'] = 'visible';
        
        return view('web.index-beta')->with($data);
    }


    public function services(){
        $data['nav'] = 'services';
        $data['titleImg'] = 'services.jpg';
        $data['title'] = 'Services';
        $data['services'] = Services::where('parent_id', '0')->get();
        $data['sub_footer'] = 'visible';
        

        return view('web.services')->with($data);
    }


    public function faq(){
        $data['nav'] = 'faq';
        $data['titleImg'] = 'faqs.png';
        $data['title'] = 'FAQ';
        
        return view('web.faq')->with($data);
    }


    public function about(){
        $data['nav'] = 'about';
        $data['titleImg'] = 'about.png';
        $data['title'] = 'About Us';
        $data['sub_footer'] = 'visible';
        
        return view('web.about')->with($data);
    }


    public function contact(){
        $data['nav'] = 'contact';
        $data['titleImg'] = 'contact.jpg';
        $data['title'] = 'Contact Us';
        $data['sub_footer'] = 'visible';
        
        return view('web.contact')->with($data);
    }


    public function privacyPolicy(){
        $data['titleImg'] = 'faqs.png';
        $data['title'] = 'Privacy Policy';
        
        return view('web.privacy-policy')->with($data);
    }


    public function termsCondition(){
        $data['titleImg'] = 'faqs.png';
        $data['title'] = 'Terms & Conditions';
        
        return view('web.terms')->with($data);
    }


    public function caseStudies(){
        $data['nav'] = 'case-studies';
        $data['titleImg'] = 'faqs.png';
        $data['title'] = 'Client Case Studies';
        
        return view('web.case-studies')->with($data);
    }


    //Get Aside
    public function getAside(){

        $data['blog_categories'] = Categories::has('blogs', '>', 0)->with('blogs')->orderBy('name')->get();
        $data['services'] = Services::where('parent_id', '0')->get();
        
        return view('web.includes.elements.aside')->with($data);
    }
}
