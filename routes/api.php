<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route; 
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
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
   Route::post('/', 'Api\EmployeeController@store');
   Route::put('/{employee}', 'Api\EmployeeController@update');
   Route::delete('/{id}', 'Api\EmployeeController@delete');
});