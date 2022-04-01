<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index()
    {
        return view('auth.login');
    }
    public  function store(Request $request)
    {

     $request->validate([
            'email'=>'required|max:255',
            'password'=>'required'
        ]);

        if (!auth()->attempt($request->only('email','password'))){
            return back()->with('status','Invalid login or password');
        }
        return redirect('/');
    }
}
