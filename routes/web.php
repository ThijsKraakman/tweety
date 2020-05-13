<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/tweets', 'TweetController@index')->name('home');
    Route::post('/tweets', 'TweetController@store');

    Route::post('/tweets/{tweet}/like', 'TweetLikesController@store');
    Route::delete('/tweets/{tweet}/like', 'TweetLikesController@destroy');

    Route::post('/profiles/{user:username}/follow', 'FollowController@store')->name('follow');
    Route::get('/profiles/{user:username}/edit', 'ProfileController@edit')->middleware('can:edit,user');

    Route::patch('/profiles/{user:username}', 'ProfileController@update')->middleware('can:edit,user');

    Route::get('/explore', 'ExploreController')->name('explore');
});

Route::get('/profiles/{user:username}', 'ProfileController@show')->name('profile');

Auth::routes();

