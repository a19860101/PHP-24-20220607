<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use DB;
use Auth;

class OrderController extends Controller
{
    //
    public function checkout(){
        $orderId = time();
        $order = Order::create([
            'orderId' => $orderId,
            'user_id' => Auth::id()
        ]);

        $carts = Cart::where('user_id',Auth::id())->get();

        foreach($carts as $cart){
            DB::table('order_details')->insert([
                'product_id'    => $cart->product->id,
                'order_id'      => $order->id
            ]);
            $cart->delete();
        }


        return redirect()->route('product.index');
    }
    public function orderList(){
        $orders = Order::where('user_id',Auth::id())->get();
        return view('order.list',compact('orders'));
    }
}
