<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin','namespace'=> 'Admin','as'=>'admin.'], function () {
    Route::get('/','AuthController@showLoginForm')->name('login');
    
    Route::post('/login','AuthController@login')->name('login.do');

    Route::get('home','AuthController@showDeash')->name('home');
});