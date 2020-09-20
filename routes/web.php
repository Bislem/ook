<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\portfolioController;
use App\Http\Controllers\servicesController;
use App\Http\Controllers\tutorialsController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/', [homeController::class,'index']);


//blog routes
Route::get('/blog',[blogController::class,'index']);
Route::get('/blog/post/{slug}',[blogController::class,'showPost']);
Route::get('/blog/category/{slug}',[blogController::class,'getCategoryPosts']);
Route::get('/blog/user/{slug}',[blogController::class,'getAuthorPosts']);
Route::post('/blog/subscribe',[blogController::class,'newsSubscription']);


//portfolio routes
Route::get('/portfolio',[portfolioController::class,'index']);
Route::get('/portfolio/{slug}',[portfolioController::class,'showPost']);
Route::get('/portfolio/category/{slug}',[portfolioController::class, 'getCategoryP']);

//about route
Route::get('/about',[aboutController::class,'index']);

//contact route
Route::get('/contact',[contactController::class,'index']);
Route::post('/message/send',[contactController::class,'message']);


//services routes
Route::get('/services',[servicesController::class, 'index']);
Route::get('/services/{slug}',[servicesController::class, 'showPost']);

//tutorials routes
Route::get('/tutorials',[tutorialsController::class,'index']);
Route::get('/tutorials/{slug}',[tutorialsController::class,'showPost']);
Route::get('/tutorials/category/{slug}',[tutorialsController::class,'getCategoryP']);


//control routes
Route::get('/cache:clear', function() {
    $exitCode = Artisan::call('cache:clear');
    dd($exitCode);
});

Route::get('/config:clear', function() {
    $exitCode = Artisan::call('config:clear');
    dd($exitCode);
});
