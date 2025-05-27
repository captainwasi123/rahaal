<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\BlogTags;
use App\Models\TagData;
use App\Models\Categories;
use App\Models\Episodes;
use App\Models\Playlists;
use App\Models\FeaturedBlogs;
use App\Models\TopStories;
use URL;

class BlogController extends Controller
{
    
    public function index(){
        $data['nav'] = 'blogs';
        $data['titleImg'] = 'services.jpg';
        $data['title'] = 'Blogs';
        if(!empty($_GET['page'])){
            $data['tags'] = '1';
        }
        $data['data'] = Blogs::where('status', '1')->orderBy('created_at', 'desc')->paginate(10);
        $data['popular_series'] = Playlists::where('popular', '1')->first();

        $data['featured'] = FeaturedBlogs::all();
        $data['top_stories'] = TopStories::all();
        $data['categories'] = Categories::all();
        //dd($data['data']);
        return view('web.blogs.index')->with($data);
    }

    public function category($slug){
        $data['nav'] = 'blogs';
        $data['titleImg'] = 'services.jpg';
        if(!empty($_GET['page'])){
            $data['tags'] = '1';
        }
        $category = Categories::where('slug', $slug)->first();
        if(!empty($category->id)){
            $data['title'] = $category->name;
            $data['type'] = 'category';
            $data['page'] = '- Blogs';
            $data['data'] = Blogs::where('status', '1')
                                    ->where('category_id', $category->id)
                                    ->orderBy('created_at', 'desc')
                                    ->paginate(8);

            return view('web.blogs.index')->with($data);
        }else{
            return redirect(route('blogs'));
        }
    }

    public function details($blog_slug){
        $data['nav'] = 'blogs';
        
        $data['data'] = Blogs::where('slug', $blog_slug)->where('status', '1')->first();

        $data['og_img'] = URL::to('public/storage/blogs/'.$data['data']->banner);
        $data['popular_series'] = Playlists::where('popular', '1')->first();
        $data['top_stories'] = TopStories::all();

        return view('web.blogs.details')->with($data);
    }


    //Experience

    
    public function experience(){
        $data['nav'] = 'experience';
        $data['title'] = 'My Experience';

        $data['data'] = Blogs::where('status', '1')->where('experience', '1')->orderBy('created_at', 'desc')->paginate(10);
        $data['popular_series'] = Playlists::where('popular', '1')->first();

        $data['top_stories'] = TopStories::all();
        $data['categories'] = Categories::all();
        //dd($data['data']);
        return view('web.experience.index')->with($data);
    }
}
