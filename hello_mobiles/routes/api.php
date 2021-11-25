<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\FAQController;
use App\Http\Controllers\api\InvoiceController;
use App\Http\Controllers\api\InvoiceDetailsController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\SecondhandProductController;
use App\Http\Controllers\api\SliderController;
use App\Http\Controllers\api\SubCategoryController;
use App\Http\Controllers\api\ProfileController;
use App\Http\Controllers\api\ReviewController;
use App\Http\Controllers\api\WishlistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/recentproducts', [ProductController::class, 'recentProduct']);
Route::resource('categories', CategoryController::class);
Route::resource('subcategories', SubCategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('faqs', FAQController::class);
Route::resource('slider', SliderController::class);


Route::group(['middleware'=>['auth:sanctum']],function () {
    Route::get('searchProduct', [ProductController::class, 'search']);
    Route::get('searchSecondHandProduct', [SecondhandProductController::class, 'search']);
    Route::resource('secondhandproducts', SecondhandProductController::class);
    Route::resource('notifications', \App\Http\Controllers\Api\NotificationController::class);
    Route::resource('invoice', InvoiceController::class);
    Route::resource('invoiceDetails', InvoiceDetailsController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('review', ReviewController::class);
    Route::resource('wishlist', WishlistController::class);
    Route::post('logout', [AuthController::class, 'logout']);
    // Route::resource('products', ProductController::class);
 
    
});
