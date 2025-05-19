<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\Episodes;
use App\Models\Playlists;
use App\Models\Categories;
use App\Models\Countries;
use App\Models\Faq;
use App\Models\Author;
use App\Models\MetaTags;
use App\Models\BlogTags;
use App\Models\TagData;
use Auth;

class EpisodeController extends Controller
{
    public function index()
    {
        $data['menu'] = 'episodes';
        $data['data'] = Episodes::orderBy('created_at', 'desc')->paginate(10);
        $data['playlists'] = Playlists::get();

        return view('admin.episodes.index')->with($data);
    }

    public function load()
    {
        $p = 1;
        if (!empty($_GET['page'])) {
            $p = $_GET['page'];
        }
        $data = Episodes::orderBy('created_at', 'desc')->paginate(10, ['*'], 'page', $p);

        return view('admin.episodes.load', ['data' => $data]);
    }

    public function search($val)
    {
        $response = [];
        $data = Episodes::when($val !== '--empty--', function ($q) use ($val) {
            return $q->where('title', 'like', '%' . $val . '%');
        })->get();

        return view('admin.episodes.load', ['data' => $data]);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $response = [];

        if (empty($data['visit_link']) || empty($data['title']) || empty($data['image_alt']) || empty($data['playlist_id'])) {
            $response['success'] = false;
            $response['errors'] = 'Please Fill all required fields.';
        } else {

            $blog = Episodes::where('title', $data['title'])->where('playlist_id', $data['playlist_id'])->get();

            if (count($blog) == 0) {

                $id = Episodes::create($data);


                if ($request->hasFile('coupon_image')) {
                    $file = $request->file('coupon_image');
                    $ext = $file->getClientOriginalExtension();
                    $newname = $id . date('dmyhis') . '.' . $ext;

                    $file->move(public_path() . '/storage/episodes', $newname);

                    $b = Episodes::find($id);
                    $b->image = $newname;
                    $b->save();
                }

                $response['success'] = 'success';
                $response['message'] = 'Success! New Episode Added.';
            } else {

                $response['success'] = false;
                $response['errors'] = 'Erorr, Episode already exist.';
            }
        }

        echo json_encode($response);
    }

    public function update_blog(Request $request)
    {
        $data = $request->all();
        $response = [];

        if (empty($data['visit_link']) || empty($data['title']) || empty($data['image_alt']) || empty($data['playlist_id'])) {
            $response['success'] = false;
            $response['errors'] = 'Please Fill all required fields.';
        } else {

            $id = Episodes::episode_update(base64_decode($data['episode_id']), $data);


            if ($request->hasFile('edit_mblog_image')) {
                $file = $request->file('edit_mblog_image');
                $ext = $file->getClientOriginalExtension();
                $newname = $id . date('dmyhis') . '.' . $ext;

                $file->move(public_path() . '/storage/episodes', $newname);

                $b = Episodes::find($id);
                $b->image = $newname;
                $b->save();
            }

            $response['success'] = 'success';
            $response['message'] = 'Success! Episode Successfully Updated.';
        }

        echo json_encode($response);
    }


    public function edit($id)
    {
        $id = base64_decode($id);

        $data = Episodes::find($id);
        $data['playlists'] = Playlists::get();


        return view('admin.episodes.edit', ['data' => $data]);
    }



    public function delete($id)
    {
        $id = base64_decode($id);

        Episodes::destroy($id);

        $response = 'success';

        return $response;
    }
}
