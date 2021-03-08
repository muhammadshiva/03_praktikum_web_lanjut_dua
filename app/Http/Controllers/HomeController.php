<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index', ['posts' => Post::index()]);
    }

    public function show() {
        return view('video-page');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact', ['testimonials' => Testimonial::index()]);
    }
}