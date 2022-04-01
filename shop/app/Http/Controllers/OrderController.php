<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public  function orderNow()
    {
        $userId=auth()->user()['id'];
        $total= $products=DB::table('carts')->join('products','carts.product_id','=','products.id')
            ->where('carts.user_id',$userId)->sum('products.price');
        return view('magazin.ordernow',compact('total'));
    }
    public function noworder(Request $request)
    {

        $data=$request->validate([
            'name'=>'required|max:255',
            'family'=>'required|max:255',
            'paynet'=>'required',
            'address'=>'required',
            'phone'=>['required','numeric',new PhoneNumber()]
        ]);
        $userId=auth()->user()['id'];
        $carts=cart::where('user_id',$userId)->get();
        foreach ($carts as $cart){
            $order=new Order();
            $order->name=$data['name'];
            $order->family=$data['family'];
            $order->phone=$data['phone'];
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->payment_method=$request['paynet'];
            $order->address=$data['address'];
            $order->save();

        }
        cart::where('user_id',$userId)->delete();
        return redirect('/');
    }

    public function show()
    {
        $userId=auth()->user()['id'];
        $orders=DB::table('orders')->join('products','orders.product_id','=','products.id')
            ->where('orders.user_id',$userId)->get();
        return view('magazin.show',compact('orders'));

    }
}
