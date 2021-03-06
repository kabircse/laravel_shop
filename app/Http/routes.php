<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/','HomeController@getIndex');
    Route::controller('home','HomeController');

    Route::get('admin/home', 'AdminController@index');
    Route::resource('product', 'ProductController');
    Route::controller('cart','CartController');
    Route::controller('wish','WishController');
    Route::controller('order','OrderController');
    Route::controller('category','CategoryController');
});
