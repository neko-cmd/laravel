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


Route::get('/', 'productcontroller@index')->name('products.index');
Route::get('/shop', 'shopcontroller@index')->name('shop.index');
Route::get('/shop/{product}', 'shopcontroller@show')->name('shop.show');
Route::get('/cart', 'cartcontroller@index')->name('cart.index');
//Route::get('/cart', 'cartcontroller@store')->name('cart.store');
Route::get('/checkout', 'checkoutcontroller@index')->name('checkout.index');
Route::get('/search', 'shopcontroller@search')->name('search');
Route::view('/thankyou', '/thankyou');
Route::view('/ind', '/products.ind');
Route::get('/contact', [
     'as' => 'contact_path',
     'uses' => 'contactscontroller@create'
]);
Route::post('/contact', [
    'as' => 'contact_path',
    'uses' => 'contactscontroller@store'
]);
Auth::routes();

Route::get('/myprofile','Userscontroller@edit')->name('Users.edit');
Route::patch('/myprofile','Userscontroller@update')->name('Users.update');
Route::get('/motpass','passcontroller@edit')->name('pass.edit');
Route::patch('/motpass','passcontroller@update')->name('pass.update');
Route::get('/myorders','orderscontroller@index')->name('orders.index');

