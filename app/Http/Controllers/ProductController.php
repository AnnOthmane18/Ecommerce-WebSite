<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        return view('pages.productPage');
    }

    public function bluelight(){
        // $products = Product::where('category','=','Bluelight');
        $products = DB::table('products')->where('category', '=', 'Bluelight')->get();
        // dd($products);
        // return view('pages.shop',compact('products'));
        return view('pages.Bluelight',['products'=>$products]);
    }
    
    public function sunglasses(){
        // $products = Product::where('category','=','SunGlasses');
        $products = DB::table('products')->where('category', '=', 'SunGlasses')->get();

        // dd($products);
        // return view('pages.shop',compact('products'));
        return view('pages.Sunglasses',['products'=>$products]);
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
