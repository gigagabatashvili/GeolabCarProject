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

// Route::get('/new', function () {
//     return view('new');
// });

// Route::get('/','IndexController@index');
// Route::resource('/contact','ContactController');
Route::resource('/','ContactController');
Route::resource('/subscriber','SubscriberController');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::resource('/service','ServiceController');
    Route::resource('/slider','SliderController');
    Route::resource('/social','SocialController');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
