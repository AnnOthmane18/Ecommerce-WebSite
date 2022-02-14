<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        return view('pages.productPage');
    }

    public function bluelight(){
        $products = DB::table('products')->where('category', '=', 'Bluelight')->get();
        return view('pages.Bluelight',['products'=>$products]);
    }

    public function blue_bluelight(){
        $products = DB::table('products')
        ->where('category', '=', 'Bluelight')
        ->where('color', '=','Blue')
        ->get();
        return view('pages.Bluelight',['products'=>$products]);
    }
    public function black_bluelight(){
        $products = DB::table('products')
        ->where('category', '=', 'Bluelight')
        ->where('color', '=','black')
        ->get();
        return view('pages.Bluelight',['products'=>$products]);
    }
    public function red_bluelight(){
        $products = DB::table('products')
        ->where('category', '=', 'Bluelight')
        ->where('color', '=','red')
        ->get();
        return view('pages.Bluelight',['products'=>$products]);
    }
    public function yellow_bluelight(){
        $products = DB::table('products')
        ->where('category', '=', 'Bluelight')
        ->where('color', '=','yellow')
        ->get();
        return view('pages.Bluelight',['products'=>$products]);
    }

    public function others_bluelight(){
        $products = DB::table('products')
        ->where('category', '=', 'Bluelight')
        ->where('color', '!=','yellow')
        ->where('color', '!=','black')
        ->where('color', '!=','red')
        ->where('color', '!=','Blue')
        ->get();
        return view('pages.Bluelight',['products'=>$products]);
    }

    
    public function sunglasses(){
        // $products = Product::where('category','=','SunGlasses');
        $products = DB::table('products')->where('category', '=', 'SunGlasses')->get();

        // dd($products);
        // return view('pages.shop',compact('products'));
        return view('pages.Sunglasses',['products'=>$products]);
    }
    public function accessories(){
        $products = DB::table('products')->where('category', '=', 'Accessories')->get();

        return view('pages.Accessories',['products'=>$products]);
    }

    public function show($id){
        $product = Product::findorfail($id);
        return view('pages.productPage',compact('product'));
    }
    
    public function kids(){
        $products = Product::all();
        return view('pages.kids',compact('products'));
    }
}
