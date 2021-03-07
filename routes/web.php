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
Route::get('/home', 'HomeController@index')->name('home');  

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