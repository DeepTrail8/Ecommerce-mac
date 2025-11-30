<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;

route::redirect('/','/dashboard');
//Home Controller
Route::GET('/dashboard',[HomeController::class,'index'])->name('home.index'); 


//Product Controller
Route::resource('products', ProductController::class);

//Brands Controller
Route::resource('brands', BrandController::class);

//Category Controller
Route::resource('categories', CategoryController::class);

//Order Controller
Route::resource('orders', OrderController::class)->except(['create', 'show']);
Route::GET('orders/show', [OrderController::class, 'showAll'])->name('orders.showall');

//Slider Controller
Route::resource('sliders', SliderController::class);

//Coupons Controller
Route::resource('coupons', CouponController::class);

//User Controller
Route::GET('users', [UserController::class, 'show'])->name('user.show');

//Admin Controller
Route::resource('admin', AdminController::class);






//Login Controller
Route::GET('/login',[LoginController::class,'login'])->name('user.login'); 