<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class cartController extends Controller
{

    public function cart(){
        return view('pages.cart');
    }

    public function addToCart($id){

        $product = Product::findorfail($id);

        $cartItems = session()->get('cartItems',[]);
        if(isset($cartItems[$id])){
            $cartItems[$id]['quantity']++;
        }else{
            $cartItems[$id] = [
                "image_path"=>$product->image_path,
                "name"=>$product->name,
                "brand"=>$product->brand,
                "details"=>$product->details,
                "price"=>$product->price,
                "quantity"=>1
            ];
        }
        session()->put('cartItems',$cartItems);
        return redirect()->back()->with('successs','Product added to cart!');
    }

    public function delete(Request $request){

        if($request->id){ // checking if request ID exists
            $cartItems = session()->get('cartItems'); // storing product infos(table[]) into cardItems 
            if(isset($cartItems[$request->id])){ // checking if the request ID == cardItems ID
                unset($cartItems[$request->id]);
                session()->put('cartItems',$cartItems); // updating the shopping cart
            }
            return redirect()->back()->with('success','product removed successfully');
        }
    }
}
