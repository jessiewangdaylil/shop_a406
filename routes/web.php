<?php

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

Route::namespace ('App\Http\Controllers')->group(function () {

    Route::get('/', 'SiteController@index');
    Route::get('/shop', 'SiteController@index');
    Route::get('/product_details', 'SiteController@product_details');

<<<<<<< HEAD
=======
Route::get('/','SiteController@index');
Route::get('/shop','SiteController@shop');
>>>>>>> fa1a898695422f76ab278cf2f4bfc52aea40e2e3
});