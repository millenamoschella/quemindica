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

Route::get('/perfil', 'PerfilController@perfil')->name('perfil');
Route::get('/configuracao', 'ConfiguracaoController@configuracao')->name('configuracao');


// ROTAS AMIGOS 

Route::get('/amigos', 'FriendController@amigosPag')->name('amigos');


// ROTAS SERVIÇOS

Route::get('/servicos', 'ServiceController@servicos')->name('servicos');


// ROTAS SITE 

Route::get('/sobre', 'SiteController@sobre')->name('sobre');
Route::get('/faq', 'SiteController@faq')->name('faq');
Route::get('/politicas-termos', 'SiteController@politicasTermos')->name('politicas-termos');
Route::get('/suporte', 'SiteController@suporte')->name('suporte');




// ---------------------------- SEÇÃO ROTAS CRUD


// ROTAS IMAGEMS

Route::get('/create', 'UserController@create')->name('create');
Route::post('/store{id}', 'UserController@store')->name('store');
Route::post('/update{id}', 'UserController@update')->name('update');


// ROTAS POSTS

Route::get('/post/create', 'PostController@create')->name('post_create');
Route::post('/post/insert', 'PostController@insert')->name('post_insert');
Route::get('/post/delete/{post_id}', 'PostController@delete')->name('post_delete');



//ROTAS COMENTÁRIOS

Route::get('/comment/create', 'CommentController@create')->name('comment_create');
Route::post('/comment/insert', 'CommentController@insert')->name('comment_insert');
Route::get('/comment/delete/{comment_id}', 'CommentController@delete')->name('comment_delete');
