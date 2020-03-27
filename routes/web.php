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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/terms-and-conditions', function(){
    return view('terms_and_conditions');
});
Auth::routes(['verify' => true]);

Route::middleware(['verified'])->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('apply', 'ApplicationController')->only(['index','show', 'store']);
    Route::resource('review', 'ReviewController')->only(['index', 'store']);
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
