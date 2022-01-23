<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('pages.productPage');
    }

    public function shop(){
        $products = Product::all();
        // dd($products);
        // return view('pages.shop',compact('products'));
        return view('pages.shop',['products'=>$products]);
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
