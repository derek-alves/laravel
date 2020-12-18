<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Api','as'=>'api.'], function () {


    Route::post('/auth/login', 'AuthController@login')->name('login');

    Route::group(['middleware' => ['apiJWT']], function () {
        
        Route::post('/auth/logout', 'AuthController@logout')->name('logout');
        Route::post('/me', 'AuthController@me')->name('me');
        Route::apiResource('/teste', 'ApiController');
    });
   
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
