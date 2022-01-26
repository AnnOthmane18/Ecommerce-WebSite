<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cartController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/',[PagesController::class,'index'])->name('home');
Route::get('/contact',[PagesController::class,'contact'])->name('contact');
Route::get('/about',[PagesController::class,'about'])->name('about');
Route::get('/product',[ProductController::class,'index'])->name('product');
Route::get('/kids',[ProductController::class,'kids'])->name('kids');

Route::get('/shop',[ProductController::class,'shop'])->name('shop');

Route::get('/shop/{id}',[ProductController::class,'show'])->name('product');

Route::get('/cart',[cartController::class,'cart'])->name('cart');
Route::get('/add-to-cart/{id}',[cartController::class,'addToCart'])->name('add.to.cart');
Route::get('/delete-from-cart/{id}',[cartController::class,'delete'])->name('delete.from.cart');

//Route::get('/user', 'UserController@index');
Route::get('/pages',[PagesController::class,'about']);

//Dashboard

Route::get('/admin',[DashboardController::class,'admin']);
Route::get('/dashboard',[DashboardController::class,'dashboard']);
Route::view('/create-product','Dashboard.CreateProduct');
// Route::view('/create-product',[DashboardController::class,'newProduct']);
Route::post('/create-product',[DashboardController::class,'addProduct']);