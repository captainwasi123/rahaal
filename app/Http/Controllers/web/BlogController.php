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
        //dd($data['data']);
        return view('web.blogs.index')->with($data);
    }

    public function indexSingle(){
        $data['nav'] = 'blogs';
        $data['titleImg'] = 'services.jpg';
        $data['title'] = 'Blogs';
        if(!empty($_GET['page'])){
            $data['tags'] = '1';
        }
        $data['data'] = Blogs::where('status', '1')->orderBy('created_at', 'desc')->paginate(8);

        return view('web.blogs.details')->with($data);
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


        $data['popular_series'] = Playlists::where('popular', '1')->first();
        $data['top_stories'] = TopStories::all();

        return view('web.blogs.details')->with($data);
    }

    public function tags($slug){
        $data['nav'] = 'blogs';
        $data['titleImg'] = 'services.jpg';
        $rdata = TagData::where('slug', $slug)->first();
        $data['tags'] = '1';

        if(!empty($rdata->id)){

            $tag = BlogTags::where('tag', $rdata->tag)->first();
            if(!empty($tag->id)){
                $data['title'] = ucwords($tag->tag).' - Tag';
                $data['type'] = 'category';
                $data['page'] = '';
                $data['data'] = Blogs::where('status', '1')
                                        ->whereHas('tags', function($q) use ($tag){
                                            return $q->where('tag', $tag->tag)
                                                        ->orWhere('tag', ' '.$tag->tag);
                                        })
                                        ->orderBy('created_at', 'desc')
                                        ->paginate(8);

                $data['ametaTags'] = [
                    'title' => ucwords($tag->tag).' - DataMySite Tag Archives',
                    'keywords' => $tag->tag,
                    'description' => $rdata->description
                ];
                //dd($data['metaTags']['title']);
                return view('web.blogs.index')->with($data);
            }else{
                return redirect(route('blogs'));
            }
        }else{
            return redirect(route('blogs'));
        }
    }
}
