<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function about() {
        return view('pages.about');
    }

    public function index() {
        $products = DB::table('products')->get();
        return view('index',['products'=>$products]);
    }
    public function contact(){
        return view('pages.contact');
    }

    
}
