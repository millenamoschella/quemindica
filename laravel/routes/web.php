<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// ROTA HOME 

Route::get('/home', 'HomeController@home')->name('home');

// ROTAS AUTENTICAÇÃO

Auth::routes();
Route::get('/logout', 'LoginController@logout')->name('logout');


// ROTAS ADMIN EQUIPE

Route::get('/admin-usuarios', 'AdminController@usuarios')->name('admin-usuarios');
Route::get('/admin-indicacoes', 'AdminController@indicacoes')->name('admin-indicacoes');
Route::get('/admin-servicos', 'AdminController@servicos')->name('admin-servicos');


// ROTAS USUÁRIO 

Route::get('/user/{username}', 'UserController@username')->name('user');

Route::get('/editarperfil/{id}', 'UserController@editProfile')->name('editarperfil');
Route::post('/updateProfile/{id}', 'UserController@updateProfile')->name('updateProfile');
Route::get('/users', 'UserController@users')->name('users');


// ROTAS USUÁRIOS SEGUIDOS PELO USER  

Route::get('/seguindo', 'FriendController@followingUsers')->name('seguindo');


// ROTA PARA SEGUIR UM USUÁRIO

Route::get('/following/{id}', 'FriendController@following')->name('seguir');


// ROTAS SERVIÇOS

Route::get('/servicos', 'ServiceController@servicos')->name('servicos');


// ROTAS SITE 

Route::get('/sobre', 'SiteController@sobre')->name('sobre');
Route::get('/faq', 'SiteController@faq')->name('faq');
Route::get('/politicas-termos', 'SiteController@politicasTermos')->name('politicas-termos');
Route::get('/suporte', 'SiteController@suporte')->name('suporte');


// ---------------------------- SEÇÃO ROTAS CRUD


// ROTAS FOTO DO USUÁRIO

Route::get('/create', 'UserController@create')->name('create');
Route::post('/store{id}', 'UserController@store')->name('store');


//ROTAS FOTO CAPA DO PERFIL

Route::get('/createCover', 'UserController@createCover')->name('createCover');
Route::post('/storeCover{id}', 'UserController@storeCover')->name('storeCover');


// ROTAS POSTS

Route::get('/post/create', 'PostController@create')->name('post_create');
Route::post('/post/insert', 'PostController@insert')->name('post_insert');
Route::get('/post/delete/{post_id}', 'PostController@delete')->name('post_delete');


//ROTAS COMENTÁRIOS

Route::get('/comment/create', 'CommentController@create')->name('comment_create');
Route::post('/comment/insert', 'CommentController@insert')->name('comment_insert');
Route::get('/comment/delete/{comment_id}', 'CommentController@delete')->name('comment_delete');


//ROTAS DE CULTURA

Route::get('/culture/create', 'CultureController@create')->name('culture_create');
Route::post('/culture/insert', 'CultureController@insert')->name('culture_insert');
Route::get('/culture/delete/{culture_id}', 'CultureController@delete')->name('culture_delete');

Route::post('/service/insert', 'ServiceController@insert')->name('service_insert');

Route::post('/product/insert', 'ProductController@insert')->name('product_insert');
