<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Playlists;
use App\Models\TopStories;

class EpisodeController extends Controller
{
    
    public function index(){
        $data['nav'] = 'episodes';
        $data['title'] = 'Episodes';
        $data['playlists'] = Playlists::all();

        $data['popular_series'] = Playlists::where('popular', '1')->first();
        $data['top_stories'] = TopStories::all();

        return view('web.episodes.index')->with($data);
    }
}
