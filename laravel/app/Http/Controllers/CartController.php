<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Auth;

class CartController extends Controller
{
    //
    public function addToCart(Request $request){

        Cart::create([
            'product_id'    => $request->product_id,
            'user_id'       => Auth::id()
        ]);

        return redirect()->back();
    }
    public function cart(){
        $carts = Cart::where('user_id',Auth::id())->get();

        $price = [];
        foreach($carts as $cart){
            if($cart->product->sale){
                $price[] = $cart->product->sale;
            }else{
                $price[] = $cart->product->price;
            }
        }
        $total = collect($price)->sum();

        return view('cart.list',compact('carts','total'));
    }
    public function deleteCartItem(Cart $cart){
        $cart->delete();
        return redirect()->back();
    }
}
