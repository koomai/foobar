<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/posts/{post}', function (App\Post $post) {
    return view('posts')->withPost($post);
});

Route::post('posts/{post}/favourite', function(App\Post $post) {
    Auth::user()->favourite($post);
});
