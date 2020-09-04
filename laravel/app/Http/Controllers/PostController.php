<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Auth;

class PostController extends Controller
{
    public function create ()
    {
         return view('post.create');
    }
 
 //    $request é um objeto para pegar os dados via POST
 //  $_POST vem $request pelo Laravel (já tratado, em segurança)
    public function insert(Request $request)
    {
         $post = new Post(); 
         
      //    $request->get('nome_do_campo_no_form')
        //  $post->titulo = $request->get('titulo');
         $post->titulo = $request->get('titulo');
         $post->conteudo = $request->get('conteudo');
         $post->user_id = Auth::user()->id;
        //  $post->user_id = $request->get('user_id');
 
         if ($post->save()) {
           //   return'Post criado com sucesso';
             return redirect()->route('post_read');
         }
         return 'Erro ao criar o post';
         // var_dump($request->all());
    }
 
    public function read()
    {
      //  carregar posts:
      // pegar o primeiro post Post::find(1) post de id = 1
      // pegar todos os posts use Post::all()
      $posts = Post::all();
 
      //  Laravel: Collections
      // $posts = [objetos Post] / $posts[0]->titulo / foreach($posts as $post)
 
      //    arquivo view post/read.blade.php
      return view('post.read', compact('posts')); //$posts foi passada para a view post/reade.blade.php
    }
 
    public function delete($post_id)
    {
      //    (decrypt($post_id));
         $post_id = decrypt($post_id);
 
         $post = Post::find($post_id);
 
         if ($post === null) {
              return 'Post não encontrado';
         }
 
         if ($post->delete ()) {
              return redirect()->route('post_read');
         }
 
         return 'Algum erro ocorreu ao excluir';
    }

    // public function createPost()
    // {
    //     return view('users.perfil');
    // }

    // public function storePost(Request $request)
    // {
    //     $userPost = User::findOrFail($id);
    //     $post = new Post();

    //     $post->conteudo = $request->get('conteudo');

    //     if ($post->save()) {
    //         return'Post criado com sucesso';
    //         // return redirect()->route('perfil');
    //     }
    //     return 'Erro ao criar o post';

    //     dd($post);
    // }
}
