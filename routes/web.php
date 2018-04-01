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

Route::middleware('auth')->group(function () {
    Route::prefix('/posts')->group(function (){
      Route::get('','PostController@index');
      Route::get('/create','PostController@create');
      Route::post('','PostController@store');
      Route::get('/{id}','PostController@show');
      Route::post('/{post}/comment', 'CommentController@addComment');
    });
});

Route::get('/vue/{vue_capture?}', function () {
  return view('vue.index');
 })->where('vue_capture', '[\/\w\.-]*');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
