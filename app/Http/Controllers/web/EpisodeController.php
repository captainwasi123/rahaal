<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    
    public function index(){
        $data['nav'] = 'episodes';
        $data['title'] = 'Episodes';

        return view('web.episodes.index')->with($data);
    }
}
