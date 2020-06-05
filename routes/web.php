<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'BlogController@index')->name('blog.index');
Route::get('/posts/{post:slug}', 'BlogController@show')->name('blog.post.show');
Route::get('/tags/{tag:slug}', 'BlogController@tagsIndex');

// RSS feeds
Route::feeds();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::post('deploy', 'DeployController@deploy');
