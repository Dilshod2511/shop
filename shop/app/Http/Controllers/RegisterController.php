<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('auth.register');
    }
    public  function store(Request $request)
    {
//        dd($request->only('email','password'));
         $data=$request->validate([
             'name'=>'required|max:255',
             'email'=>'required|max:255',
             'password'=>'required'
         ]);

         $user=new  User();
         $user->name=$data['name'];
         $user->email=$data['email'];
         $user->password=Hash::make($data['password']);
          $chek=User::where(['email'=>$request->email])->first();

         if ( $chek){
             return back()->with('success', 'email is already available');
         }
         else{
             $user->save();
             auth()->attempt($request->only('email','password'));
             return redirect('/');
         }


    }
}
