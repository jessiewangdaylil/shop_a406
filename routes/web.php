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
    Route::get('/product_details', 'SiteController@product_details');
    Route::get('/shop', 'SiteController@shop');
    Route::get('/contact', 'SiteController@contact');
    Route::get('/confirmation', 'SiteController@confirmation');
    Route::get('/elements', 'SiteController@elements');
    Route::get('/product_details', 'SiteController@product_details');

});