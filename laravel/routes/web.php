<?php

use Illuminate\Support\Facades\Route;

/**
 * ROTAS 
 */


Route::get('/home', 'HomeController@home')->name('home'); //controller para página home 

Route::get('/registrar', 'RegistrarController@registrar')->name('registrar'); // precisa de controller para o formulário

Route::get('/login', 'LoginController@login')->name('login'); // precisa de controller para o formulário

Route::get('/perfil', 'PerfilController@perfil')->name('perfil'); // precisa de controller para mostrar os posts, excluir, edtar etc

Route::get('/feed', 'FeedController@feed')->name('home'); //precisa de controller, deixar compacto: reaction, post dentro de feed

Route::get('/suporte', 'SuporteController@suporte')->name('suporte'); //precisa de controller para o formulário

Route::get('/servicos', 'ServiceController@servicos')->name('servicos'); //talvez precise, rever

Route::get('/amigos', 'FriendController@amigos')->name('amigos'); //precisa de controller para excluir um amigo/ precisar editar a view

Route::get('/configuracao', 'ConfiguracaoController@configuracao')->name('configuracao'); //precisa de controller para cru usuario/ precisar editar a view




// ROTAS - CONTROLLER SITE

Route::get('/sobre', 'SiteController@sobre')->name('sobre');
Route::get('/faq', 'SiteController@faq')->name('faq');
Route::get('/termos', 'SiteController@termos')->name('termos');
Route::get('/politica-dados', 'SiteController@politicaDados')->name('politica-dados');
Route::get('/politica-cookies', 'SiteController@politicaCookies')->name('politica-cookies');













// Route::get('/post', 'PostController@post')->name('post');

// Route::get('/product ', 'ProductController@product')->name('product'); 

// Route::get('/reaction', 'ReactionController@reaction')->name('reaction');

// Route::get('/segment', 'SegmentController@segment')->name('segment');

// Route::get('/culture', 'CultureController@culture')->name('culture');

// Route::get('/genre', 'GenreController@genre')->name('genre');
