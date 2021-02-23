<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function vidio() {
        return view('video-page');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
}
