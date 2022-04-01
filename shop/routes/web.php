<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register', [App\Http\Controllers\RegisterController::class,'index'])->name('register');
Route::post('/register', [App\Http\Controllers\RegisterController::class,'store']);

Route::get('/login',[App\Http\Controllers\LoginController::class,'index'])->name('login');
Route::post('/login',[App\Http\Controllers\LoginController::class,'store']);
Route::get('/logout', function (){
    auth()->logout();
    return redirect('/');
});

Route::get('/',[App\Http\Controllers\ProductController::class,'index']);
Route::get('/detali/{id}',[App\Http\Controllers\ProductController::class,'detali']);
Route::post('/add_to_cart',[App\Http\Controllers\CartController::class,'addProduct']);
Route::get('/cartList',[App\Http\Controllers\CartController::class,'cartList']);
Route::get('/remove/{id}',[App\Http\Controllers\CartController::class,'destroy']);
Route::get('/ordernow',[App\Http\Controllers\OrderController::class,'orderNow']);
Route::post('/noworder',[App\Http\Controllers\OrderController::class,'noworder']);
Route::get('/show', [\App\Http\Controllers\OrderController::class, 'show']);
Route::post('/search',[App\Http\Controllers\SearchController::class,'show']);
Route::get('/list', [\App\Http\Controllers\ProductController::class, 'list']);
Route::get('/url',[App\Http\Controllers\CurrencyController::class,'index']);
Route::post('/addcurl',[App\Http\Controllers\CurrencyController::class,'store']);




