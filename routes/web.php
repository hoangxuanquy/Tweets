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

Route::middleware('auth')->group(function(){
    Route::get('/tweets',  'TweetsController@index')->name('home');
    Route::POST('/tweets', 'TweetsController@store');
    
    Route::POST('/profiles/{user}/follow','FollowsController@store');
});

Route::get('/profiles/{user}','ProfilesController@show')->name('profile');


Auth::routes(); 