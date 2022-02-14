<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cartController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;



// Route::get('/', function () {
//     return view('pages.about');
// });

Route::get('/',[PagesController::class,'index'])->name('Home');




Route::get('/contact',[PagesController::class,'contact'])->name('contact');
Route::get('/about',[PagesController::class,'about'])->name('about');
Route::get('/product',[ProductController::class,'index'])->name('product');
Route::get('/kids',[ProductController::class,'kids'])->name('kids');

Route::get('/blue-light',[ProductController::class,'bluelight'])->name('bluelight');
Route::get('/sun-glasses',[ProductController::class,'sunglasses'])->name('sunglasses');
Route::get('/accessories',[ProductController::class,'accessories'])->name('accessories');

//filters 
Route::get('/bluelight-blue',[ProductController::class,'blue_bluelight'])->name('blue_bluelight');
Route::get('/bluelight-black',[ProductController::class,'black_bluelight'])->name('black_bluelight');
Route::get('/bluelight-red',[ProductController::class,'red_bluelight'])->name('red_bluelight');
Route::get('/bluelight-yellow',[ProductController::class,'yellow_bluelight'])->name('yellow_bluelight');
Route::get('/bluelight-others',[ProductController::class,'others_bluelight'])->name('others_bluelight');

Route::get('/shop/{id}',[ProductController::class,'show'])->name('product');

Route::get('/cart',[cartController::class,'cart'])->name('cart');
Route::get('/add-to-cart/{id}',[cartController::class,'addToCart'])->name('add.to.cart');
Route::get('/delete-from-cart/{id}',[cartController::class,'delete'])->name('delete.from.cart');
Route::get('/delete-all-from-cart',[cartController::class,'deleteAll'])->name('deleteAll');
Route::get('/delete-all-from-cart',[cartController::class,'deleteAll'])->name('deleteAll');

//Route::get('/user', 'UserController@index');
Route::get('/pages',[PagesController::class,'about']);

//Dashboard

// Route::get('/admin',[DashboardController::class,'admin']);
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
// Route::view('/create-product','Dashboard.CreateProduct')->name('create-product');
Route::post('/create-product',[DashboardController::class,'addProduct']);

Route::get('/create-product',[DashboardController::class,'newProduct'])->name('create-product');
Route::get('/list-products',[DashboardController::class,'listProducts'])->name('list-products');
// Route::get('/search/{name}',[DashboardController::class,'search'])->name('search');
Route::get('/delete-from-list/{id}',[DashboardController::class,'Delete'])->name('delete.from.list');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/checkout', [CheckoutController::class, 'checkout']);
Route::get('/customer-info', [CheckoutController::class, 'info'])->name('customer-info');
Route::get('/payment', [CheckoutController::class, 'payment'])->name('payment');
