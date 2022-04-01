<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{

    public function index()
    {
        $products= Product::all();
        return view('/magazin.product',compact('products'));
    }
    public function detali($id)
    {
        $products=Product::find($id);
        return view('magazin.detali',compact('products'));
    }



    public  function list()
    {
        $userId=auth()->user()['id'];
        $orders=DB::table('orders')->join('products','orders.product_id','=','products.id')
            ->where('orders.user_id',$userId)->get();
        return response()->json($orders);
    }
}
