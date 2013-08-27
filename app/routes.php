<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses' => 'HomeController@index'));

Route::resource('orders', 'OrdersController');

Route::resource('items', 'ItemsController');

Route::get('login', array('uses' => 'UsersController@create', 'as' => 'users.create'));

Route::get('cart', array('uses' => 'Cart@index', 'as' => 'cart.index'));