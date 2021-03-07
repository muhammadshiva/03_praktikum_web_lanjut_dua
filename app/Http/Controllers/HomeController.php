<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index', ['posts' => Post::index()]);
    }

    public function vidio($vidio) {
        return view('video-page', ['post' => Post::getByVideo($vidio)]);
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
}
