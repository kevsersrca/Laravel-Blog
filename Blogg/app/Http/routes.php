<?php

Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/','HomeController@welcome');
Route::group(['middleware' => 'web'], function () {
    Route::resource('post','PostController');
    Route::resource('tag','TagController');
    Route::get('/postview/{id}','PostViewController@getView');
});
