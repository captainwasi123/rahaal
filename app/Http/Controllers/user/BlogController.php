<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\Categories;
use App\Models\Countries;
use App\Models\Faq;
use App\Models\Author;
use App\Models\MetaTags;
use App\Models\BlogTags;
use App\Models\TagData;
use Auth;

class BlogController extends Controller
{
    public function index()
    {
        //$data['menu'] = 'blogs';

        $data['data'] = Blogs::where('is_local', '0')->where('author_id', Auth::id())->orderBy('id', 'desc')->with('category')->with('author')->paginate(10);
        $data['categories'] = Categories::where('parent_id', 0)->where('status', 1)->get();
        $tagsData = TagData::all();
        $data['authors'] = Author::get();

        $data['count'] = Blogs::where('is_local', '0')->where('author_id', Auth::id())->where('created_at', '>', now()->subDays(30)->endOfDay())->count();
        $data['verified'] = Auth::user()->email_verified;

        $data['is_eligible'] = 0;
        if ($data['count'] == 0 && $data['verified'] == 1) {
            $data['is_eligible'] = 1;
        }

        //dd($data);

        return view('users.blogs.index', ['data' => $data, 'menu' => 'blogs', 'tagsData' => $tagsData]);
    }

    public function load()
    {
        $p = 1;
        if (!empty($_GET['page'])) {
            $p = $_GET['page'];
        }
        $data = Blogs::where('is_local', '0')->where('author_id', Auth::id())->orderBy('id', 'desc')->paginate(10, ['*'], 'page', $p);

        return view('users.blogs.load', ['data' => $data]);
    }

    public function search($val)
    {
        $response = [];
        $data = Blogs::when($val !== '--empty--', function ($q) use ($val) {
            return $q->where('heading', 'like', '%' . $val . '%');
        })->where('is_local', '0')->where('author_id', Auth::id())->get();

        return view('users.blogs.load', ['data' => $data]);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $response = [];

        if (empty($data['heading']) || empty($data['slug']) || empty($data['description']) || empty($data['short_description']) || empty($data['category_id'])) {
            $response['success'] = false;
            $response['errors'] = 'Please Fill all required fields.';
        } else {

            $blog = Blogs::where('heading', $data['heading'])->where('category_id', $data['category_id'])->get();

            if (count($blog) == 0) {

                $b = new Blogs;
                $b->heading = $data['heading'];
                $b->banner_alt = $data['banner_alt'];
                $b->slug = $data['slug'];
                $b->description = $data['description'];
                $b->read_time = '6';
                $b->short_description = $data['short_description'];
                $b->category_id = $data['category_id'];
                $b->experience = !empty($data['experience']) ? '1' : '0';
                $b->author_id = Auth::id();
                $b->is_local = '0';
                $b->status = '0';
                $b->created_by = Auth::id();
                $b->save();

                $id = $b->id;



                //Meta Title -- Start

                    $meta_url = 'https://rahaal-theexplorer.com/blog/'.$data['slug'];

                    $mt = new MetaTags;
                    $mt->url = $meta_url;
                    $mt->title = $data['meta_title'];
                    $mt->keywords = '';
                    $mt->description = $data['short_description'];
                    $mt->created_by = '1';
                    $mt->save();


                //Meta Title -- End


                if ($request->hasFile('coupon_image')) {
                    $file = $request->file('coupon_image');
                    $ext = $file->getClientOriginalExtension();
                    $newname = $id . date('dmyhis') . '.' . $ext;

                    $file->move(public_path() . '/storage/blogs', $newname);

                    $b = Blogs::find($id);
                    $b->banner = $newname;
                    $b->save();
                }

                $response['success'] = 'success';
                $response['message'] = 'Success! New Article Added.';
            } else {

                $response['success'] = false;
                $response['errors'] = 'Erorr, Article with same name already exist.';
            }
        }

        echo json_encode($response);
    }

    public function update_blog(Request $request)
    {
        $data = $request->all();
        $response = [];

        if (empty($data['heading']) || empty($data['slug']) || empty($data['description']) || empty($data['short_description']) || empty($data['category_id'])) {
            $response['success'] = false;
            $response['errors'] = 'Please Fill all required fields.';
        } else {

            $b = Blogs::find(base64_decode($data['blog_id']));
            $b->heading = $data['heading'];
            $b->banner_alt = $data['banner_alt'];
            $b->slug = $data['slug'];
            $b->description = $data['description'];
            $b->short_description = $data['short_description'];
            $b->category_id = $data['category_id'];
            $b->save();

            $id = $b->id;

            //Meta Title -- Start

                $meta_url = 'https://rahaal-theexplorer.com/blog/'.$data['slug'];
                $mt = MetaTags::where('url', $meta_url)->first();
                if(empty($mt->id)){
                    $mt = new MetaTags;
                    $mt->url = $meta_url;
                    $mt->created_by = '1';
                }
                $mt->title = $data['meta_title'];
                $mt->keywords = '';
                $mt->description = $data['short_description'];
                $mt->created_by = '1';
                $mt->save();


            //Meta Title -- End


            if ($request->hasFile('edit_mblog_image')) {
                $file = $request->file('edit_mblog_image');
                $ext = $file->getClientOriginalExtension();
                $newname = $id . date('dmyhis') . '.' . $ext;

                $file->move(public_path() . '/storage/blogs', $newname);

                $b = Blogs::find($id);
                $b->banner = $newname;
                $b->save();
            }

            $response['success'] = 'success';
            $response['message'] = 'Success! Blog Successfully Updated.';
        }

        echo json_encode($response);
    }


    public function edit($id)
    {
        $id = base64_decode($id);

        $data = Blogs::find($id);
        $data['categories'] = Categories::where('parent_id', 0)->where('status', 1)->get();
        $data['authors'] = Author::get();
        $data['tags'] = '';
        
        $meta_url = 'https://rahaal-theexplorer.com/blog/';
        
        $meta_url .= $data->slug;

        $data['meta_title'] = MetaTags::where('url', $meta_url)->first();
        
       

        return view('users.blogs.edit', ['data' => $data]);
    }



    public function delete($id)
    {
        $id = base64_decode($id);

        Blogs::destroy($id);

        $response = 'success';

        return $response;
    }
}
