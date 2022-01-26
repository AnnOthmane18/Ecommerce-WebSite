<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin(){
        return view('Dashboard.admin');
    }

    public function dashboard(){
        return view('Dashboard.dashboard');
    }
    public function newProduct(){
        return view('Dashboard.CreateProduct');
    }
    public function addProduct(Request $req){
        $product = new Product;
        $product->name = $req->name;
        $product->description = $req->description;
        $product->age = $req->flexRadioDefault;
        $product->price = $req->salesPrice;
        $product->regularPrice = $req->regularPrice;
        $product->category = $req->category;
        $product->quantity = $req->quantity;
        $product->image_path = $req->mainImage;
        $product->product_image = $req->productImage;
        $product->side_image = $req->sideImage;
        $product->man_image = $req->manImage;
        $product->women_image = $req->womenImage;
        $product->color = $req->color;
        $product->material = $req->material;

        $product->save();
    }
}
