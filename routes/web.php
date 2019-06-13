<?php

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

Route::get('/', [
    'as'=> 'client.home.index',
    'uses'=> 'Homecontroller@index'
]);
Route::get('about', [
    'as'=> 'client.home.about',
    'uses'=> 'Homecontroller@about'
]);

Route::group(['prefix' => 'gio-hang'], function () {
    Route::get('', [
        'as'=> 'client.cart.cart',
        'uses'=> 'Cartcontroller@cart'
    ]);
    Route::get('thanh-toan', [
        'as'=> 'client.cart.checkout',
        'uses'=> 'Cartcontroller@checkout'
    ]);
    Route::get('hoan-thanh', [
        'as'=> 'client.cart.complete',
        'uses'=> 'Cartcontroller@complete'
    ]);
});
Route::get('lien-he', [
    'as'=> 'client.home.contact',
    'uses'=> 'Homecontroller@contact'
]);
Route::group(['prefix' => 'shop'], function () {
    Route::get('{id}', [
        'as'=> 'client.product.detail',
        'uses'=> 'Productcontroller@detail'
    ]);
    Route::get('', [
        'as'=> 'client.product.shop',
        'uses'=> 'Productcontroller@shop'
    ]);
    
});



