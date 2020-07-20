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

Route::get('/', 'HomeController@home')->name('home');

Route::get('/post','PostController@post')->name('post');

Route::get('/product ','ProductController@product')->name('product');

Route::get('/reaction','ReactionController@reaction')->name('reaction');

Route::get('/segment','SegmentController@segment')->name('segment');

Route::get('/service','ServiceController@service')->name('service');

Route::get('/culture','CultureController@culture')->name('culture');

Route::get('/genre','GenreController@genre')->name('genre');