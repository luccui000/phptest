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
Auth::routes();
Route::group(['middleware' => 'auth'], function() {
    Route::get('/customers', 'CustomerController@index')->name('customer.index');  
    Route::get('/customers/anyData', 'CustomerController@anyData')->name('customer.anyData');  
    Route::get('/customer/create', 'CustomerController@create')->name('customer.create');  
    Route::post('/customer/store', 'CustomerController@store')->name('customer.store');  
    Route::get('/customer/{id}/edit', 'CustomerController@edit')->name('customer.edit');  
    Route::put('/customer/{id}/update', 'CustomerController@update')->name('customer.update');  
    Route::delete('/customer/{customer}', 'CustomerController@destroy')->name('customer.destroy');  

});
Route::get('/home', 'HomeController@index')->name('home');  
Route::get('/register', 'Api\UserController@register')->name('user.register');  

Route::get('pay', 'Api\PayOrderController@index');
Route::get('channels', 'ChannelsController@index');


Route::get('post', 'PostController@index')->name('post.index');
Route::get('post/create', 'PostController@create')->name('post.create');
Route::post('post/store', 'PostController@store')->name('post.store');
Route::get('post/{id}/edit', 'PostController@edit')->name('post.edit');
Route::put('post/{id}', 'PostController@update')->name('post.update');
Route::delete('post/{id}', 'PostController@delete')->name('post.delete');
Route::get('post/{id}', 'PostController@show')->name('post.show');


Route::get('channels/post', 'PostController@create');