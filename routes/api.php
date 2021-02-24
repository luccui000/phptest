<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;  



Route::group(['middleware' => ['api', 'jwt.verify']], function() {
   Route::post('me', 'Api\UserController@me'); 
   Route::put('update/{user}', 'Api\UserController@update');  
});
Route::group(['prefix' => 'auth'], function($router) {   
   Route::post('login', 'AuthController@login');
   Route::post('register', 'AuthController@register'); 
   Route::post('logout', 'AuthController@logout'); 
});
Route::group([ 
   'middleware' => ['api', 'jwt.verify'],
   'prefix' => 'employee'
], function () {
   Route::get('/', 'Api\EmployeeController@index');
   Route::post('/', 'Api\EmployeeController@store');
   Route::put('/{employee}', 'Api\EmployeeController@update');
   Route::delete('/{id}', 'Api\EmployeeController@destroy');
});

Route::group([ 
   'middleware' => ['api', 'jwt.verify'],
   'prefix' => 'sanpham'
], function() {
   Route::get('/', 'Api\SanPhamController@index');
   Route::post('/', 'Api\SanPhamController@store');
   Route::put('/', 'Api\SanPhamController@update');
   Route::delete('/', 'Api\SanPhamController@destroy');
});