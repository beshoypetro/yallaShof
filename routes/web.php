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

//Route::get('/index', function () {
//    return view('main.index');
//});


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/blog', 'UserController@index');
Route::get('/', 'UserController@homePage')->name('index');


Route::middleware(['auth'])->group(function () {
    Route::get('/addPost', 'UserController@addPost')->name('addPost');
    Route::post('/storePost', 'UserController@storePost')->name('storePost');
    Route::get('user/posts/{id}', 'PostController@showPost');
//    Route::post('/storePost', 'PostController@storePost')->name('storePost');


});



Route::resource('posts', 'PostController');

Route::resource('comments', 'CommentController');

Route::resource('likes', 'LikeController');
