<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Contact;


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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::namespace('HomeController')->group(function(){
    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('redirect',[HomeController::class,'redirect'])->name('redirect');
    Route::get('category',[HomeController::class,'category'])->name('category');
    Route::get('cart/{id}',[HomeController::class,'cart'])->name('cart');
    Route::post('storecart/{id}',[HomeController::class,'storecart'])->name('storecart');
    Route::get('a',[HomeController::class,'a'])->name('a');
    Route::get('product_description/{id}',[HomeController::class,'product_description'])->name('product_description');
    Route::get('deletecart/{id}',[HomeController::class,'deletecart'])->name('deletecart');
    Route::get('product_category/{id}',[HomeController::class,'product_category'])->name('product_category');
    Route::get('search',[HomeController::class,'search'])->name('search');
    

});






Route::namespace('AdminConroller')->group(function(){
Route::get('insertcategory',[AdminController::class,'insertcategory'])->name('insertcategory');
Route::post('storecategory',[AdminController::class,'storecategory'])->name('storecategory');
Route::get('admincategory',[AdminController::class,'admincategory'])->name('admincategory');
Route::get('editcategory/{id}',[AdminController::class,'editcategory'])->name('editcategory');
Route::post('updatecategory/{id}',[AdminController::class,'updatecategory'])->name('updatecategory');
Route::post('deletecategory/{id}',[AdminController::class,'deletecategory'])->name('deletecategory');

Route::get('adminproduct',[AdminController::class,'adminproduct'])->name('adminproduct');
Route::post('storeproduct',[AdminController::class,'storeproduct'])->name('storeproduct');
Route::get('insertproduct',[AdminController::class,'insertproduct'])->name('insertproduct');
Route::get('checkout',[AdminController::class,'checkout'])->name('checkout');
Route::get('editproduct{id}',[AdminController::class,'editproduct'])->name('editproduct');
Route::get('deleteproduct{id}',[AdminController::class,'deleteproduct'])->name('deleteproduct');
Route::post('updateproduct{id}',[AdminController::class,'updateproduct'])->name('updateproduct');
/* start Route USer */
Route::get('ShowUser',[UserController::class,'ShowUser'])->name('ShowUser');
Route::get('DeleteUser/{id}',[UserController::class,'DeleteUser'])->name('DeleteUser');
/* End Route USer */

/* start contact */
Route::get('contact',[AdminController::class,'contact'])->name('contact');
Route::post('storecontact',[AdminController::class,'storecontact'])->name('storecontact');
Route::get('deletecontact/{id}',[AdminController::class,'deletecontact'])->name('deletecontact');

/*end contact */

});


Route::post('orderconfirm',[OrderController::class,'orderconfirm'])->name('orderconfirm');