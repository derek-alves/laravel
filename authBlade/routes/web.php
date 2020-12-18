<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {

    Route::get('/', 'AuthController@showLoginForm')->name('login');
    Route::post('/login', 'AuthController@login')->name('login.do');

    Route::group(['middleware'=>['auth']], function () {
        Route::get('/home', 'AuthController@home')->name('home');
        Route::get('/video','VideoController@index')->name('index');
    });
   

    Route::get('/logout', 'AuthController@logout')->name('logout');
});
