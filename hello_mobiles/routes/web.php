<?php

use App\Http\Controllers\api\InvoiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\InvoiceController as ControllersInvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SecondhandProductController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();



Auth::routes();

Route::group(['middleware'=>['guest']],function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('categories',CategoryController::class);
Route::resource('subcategories',SubCategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('faqs', FAQController::class);
Route::resource('productImages', ProductImageController::class);
Route::resource('profile', ProfileController::class);
Route::resource('slider', SliderController::class);
Route::resource('secondhandproducts', SecondhandProductController::class);
Route::resource('invoice', ControllersInvoiceController::class);

    
});


