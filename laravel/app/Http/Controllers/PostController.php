<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Culture;
use App\Product;
use App\Service;
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


          $post->save();
          return back();
     }


     public function delete($post_id)
     {
          $post_id = decrypt($post_id);
          $post = Post::find($post_id);

          $post->delete();
          return back();
     }
}
