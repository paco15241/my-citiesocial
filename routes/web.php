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

Route::get('/', 'ProductsController@index')->name('index');

Route::resource('products', ProductsController::class)->only([
    'index', 'show'
]);

Route::group(['prefix' => 'users'], function(){
    Auth::routes();
});
Route::get('users/login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('users/login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');
