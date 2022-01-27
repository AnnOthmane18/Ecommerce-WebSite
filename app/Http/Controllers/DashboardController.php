<?php

namespace App\Http\Controllers;

use File;
use App\Models\Product;
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
        $product->name = $req->productName;
        $product->description = $req->description;
        $product->age = $req->flexRadioDefault;
        $product->price = $req->salesPrice;
        $product->regularPrice = $req->regularPrice;
        $product->category = $req->category;
        $product->quantity = $req->quantity;
        

        File::makeDirectory('imgs/'.$product->id);
       /* if($req->hasFile('mainImage')){
            $file = $req->file('mainImage');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('/opt/lampp/htdocs/Ecom_prj/public/imgs/',$filename);
            $product->image_path += 'imgs/'.$filename;
        }else{
            $product->image_path = 'image not found';
        }*/ 

        // $product->image_path =  $req->file('imageTest');
       
        if($req->hasFile('imageTest')){
            $file = $req->file('imageTest');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
           
            $file->move('imgs/',$filename);
            $product->image_path = 'imgs/'.$filename;
        }else{
            $product->image_path = 'image not found';
        }

        if($req->hasFile('productImage')){
            $file = $req->file('productImage');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('imgs/',$filename);
            $product->image_path = 'imgs/'.$filename;
        }else{
            $product->image_path = 'image not found';
        }
        if($req->hasFile('sideImage')){
            $file = $req->file('sideImage');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('imgs/',$filename);
            $product->image_path = 'imgs/'.$filename;
        }else{
            $product->image_path = 'image not found';
        }
        if($req->hasFile('manImage')){
            $file = $req->file('manImage');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('imgs/',$filename);
            $product->image_path = 'imgs/'.$filename;
        }else{
            $product->image_path = 'image not found';
        }
        if($req->hasFile('womanImage')){
            $file = $req->file('womanImage');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('imgs/',$filename);
            $product->image_path = 'imgs/'.$filename;
        }else{
            $product->image_path = 'image not found';
        }
        // $product->image_path = $req->mainImage;
        $product->product_image = $req->productImage;
        $product->side_image = $req->sideImage;
        $product->man_image = $req->manImage;
        $product->women_image = $req->womenImage;
        $product->color = $req->color;
        $product->material = $req->Material;
            // material
        $product->save();
        // return $req->file('imageTest')->store('IMGS');
        return redirect('create-product');
    }
}
