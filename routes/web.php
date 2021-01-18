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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products','CarController@products');

Route::get('/home', function () {
    return view('index');
});
Route::get('/addtocart/{id}','CarController@addtocart')->name('product.addtocart');
Route::get('/shoppingcart','CarController@shoppingcart')->name('shop.shopping-cart');
Route::get('/checkout','CarController@checkout');//to show the page
Route::post('/checkout','CarController@storecheckout');//form


Route::get('/register','CarController@register');//to show register page
Route::get('/login','CarController@login');
Route::get('/logout','CarController@logout');
Route::post('/register','CarController@storeregister');//to store the data of register in DB
Route::post('/login','CarController@storelogin');
Route::post('/logout','CarController@storelogout');