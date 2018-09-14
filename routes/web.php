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



Route::get('blog', 'PostController@index')->name('blog');
Route::get('post/{post}', 'PostController@show')
    ->name('post-detail')
    ->where('post', '[a-z\-]+');

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::view('create-post', 'blog.create-post');
    Route::post('store-post', 'PostController@store')
    ->name('store-post');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('hello', function () {
  dd([
      'user' => [
          'name' => 'Eugene',
          'email' => 'eugene@gmail.com'
      ]
  ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
