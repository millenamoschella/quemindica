<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
     public function create()
     {
          return view('post.create');
     }


     public function insert(Request $request)
     {
          $post = new Post();

          $post->titulo = $request->get('titulo');
          $post->conteudo = $request->get('conteudo');
          $post->user_id = Auth::user()->id;

          if ($post->save()) {

               return redirect()->route('post_read');
          }
          return 'Erro ao criar o post';
     }




     public function read($id)
     {
          $user = User::All();
          $posts = Post::All();

          // $posts = $posts->where("user_id", "=", $user->id)->get();

          $posts = Post::where('user_id', '=', Auth::user()->id)->get();

          return view('post.read', compact('posts'));
     }


     public function delete($post_id)
     {

          $post_id = decrypt($post_id);

          $post = Post::find($post_id);

          if ($post === null) {
               return 'Post não encontrado';
          }

          if ($post->delete()) {
               return redirect()->route('post_read');
          }

          return 'Algum erro ocorreu ao excluir';
     }
}
