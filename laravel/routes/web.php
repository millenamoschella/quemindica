<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// ROTA HOME

Route::get('/home', 'HomeController@home')->name('home');


// ROTAS AUTENTICAÇÃO


Auth::routes();
Route::get('/logout', 'LoginController@logout')->name('logout');
// Route::get('/registrar', 'RegistrarController@registrar')->name('registrar');
// Route::get('/login', 'LoginController@login')->name('login');



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



// ROTAS IMAGEM USUÁRIO

// Route::get('/perfil/create', 'PerfilController@photoCreate')->name('create');

// Route::post('/perfil/store', 'PerfilController@photoStore')->name('store');

// Route::get('/perfil/edit{id}', 'PerfilController@photoEdit')->name('edit');

// Route::post('/perfil/update{id}', 'PerfilController@photoUpdate')->name('update');




Route::get('/create', 'UserController@create')->name('create');

Route::post('/store{id}', 'UserController@store')->name('store');

Route::post('/update{id}', 'UserController@update')->name('update');

// Route::get('/show{id}', 'TesteController@show')->name('show');

// Route::get('/edit{id}', 'TesteController@edit')->name('edit');

// Route::get('/delete{id}', 'TesteController@destroy')->name('delete');

// Route::post('/update{id}', 'TesteController@update')->name('update');

// Route::get('/perfil', 'PostController@createPost')->name('createPost');

// Route::post('/storePost', 'PostController@storePost')->name('storePost');

// Route::post('/deletePost{id}', 'PostController@deletePost')->name('deletePost');


Route::get('/post/create', 'PostController@create')->name('post_create'); //dentro da view: {{ route('post_create') }}

Route::post('/post/insert', 'PostController@insert')->name('post_insert');

Route::get('/post/read', 'PostController@read')->name('post_read');

Route::get('/post/delete/{post_id}', 'PostController@delete')->name('post_delete');










// Route::get('/post', 'PostController@post')->name('post');

// Route::get('/product ', 'ProductController@product')->name('product'); 

// Route::get('/reaction', 'ReactionController@reaction')->name('reaction');

// Route::get('/segment', 'SegmentController@segment')->name('segment');

// Route::get('/culture', 'CultureController@culture')->name('culture');

// Route::get('/genre', 'GenreController@genre')->name('genre');
