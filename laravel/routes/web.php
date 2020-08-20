<?php

use Illuminate\Support\Facades\Route;

// ROTA HOME

Route::get('/home', 'HomeController@home')->name('home');


// ROTAS AUTENTICAÇÃO

Route::get('/registrar', 'RegistrarController@registrar')->name('registrar');
Route::get('/login', 'LoginController@login')->name('login');



// ROTAS SERVIÇOS

Route::get('/servicos', 'ServiceController@servicos')->name('servicos');



// ROTAS AMIGOS 

Route::get('/amigos', 'FriendController@amigosPag')->name('amigos');



// ROTAS USUÁRIO 

Route::get('/feed', 'FeedController@feed')->name('home');
Route::get('/configuracao', 'ConfiguracaoController@configuracao')->name('configuracao');
Route::get('/perfil', 'PerfilController@perfil')->name('perfil');



// ROTAS SITE 

Route::get('/sobre', 'SiteController@sobre')->name('sobre');
Route::get('/faq', 'SiteController@faq')->name('faq');
Route::get('/politicas-termos', 'SiteController@politicasTermos')->name('politicas-termos');
Route::get('/suporte', 'SiteController@suporte')->name('suporte');


// ROTAS ADMIN EQUIPE

Route::get('/admin-usuarios', 'AdminController@usuarios')->name('admin-usuarios');
Route::get('/admin-indicacoes', 'AdminController@indicacoes')->name('admin-indicacoes');
Route::get('/admin-servicos', 'AdminController@servicos')->name('admin-servicos');





// Route::get('/post', 'PostController@post')->name('post');

// Route::get('/product ', 'ProductController@product')->name('product'); 

// Route::get('/reaction', 'ReactionController@reaction')->name('reaction');

// Route::get('/segment', 'SegmentController@segment')->name('segment');

// Route::get('/culture', 'CultureController@culture')->name('culture');

// Route::get('/genre', 'GenreController@genre')->name('genre');
