<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about() {
        return view('pages.about');
    }

    public function index() {
        return view('index');
    }
    public function contact(){
        return view('pages.contact');
    }

    
}
