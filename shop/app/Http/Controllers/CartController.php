<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public  function addProduct(Request $request)
    {

        if (auth()->user()){
            $cart=new cart();
            $cart->product_id=$request->product_id;
            $cart->user_id=auth()->user()['id'];
            $cart->save();
            return redirect('/');

        }else{
            return redirect('/login');
        }
    }


    static function cartItem()
    {
        $userid=auth()->user()['id'];
        return   cart::where('user_id',$userid)->count();

    }

    public  function cartList()
    {
        $userId=auth()->user()['id'];
        $products=DB::table('carts')->join('products','carts.product_id','=','products.id')
            ->where('carts.user_id',$userId)->select('products.*','carts.id as cart_id')->get();
        return view('magazin.cartList',compact('products'));
    }

    public function destroy($id)
    {
        cart::destroy($id);
        return redirect('/cartList');
    }
}
