<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Culture;
use App\Culture_Segment;
use App\Post;
use Auth;

class CultureController extends Controller
{
    public function create()
    {
         return view('culture.create');
    }


    public function insert(Request $request)
    {

         $culture = new Culture();
         
         $culture->culture__segments_id = $request->get('culture__segments_id');
         $culture->titulo = $request->get('titulo');
         $culture->plataforma = $request->get('plataforma');
         $culture->save();

         $post = new Post();

         $post->conteudo = $request->get('conteudo');
         $post->user_id = Auth::user()->id;
         $post->culture_id = $culture->id;

     //     $post = Post::all();



         $post->save();
         return back();
    }


    public function delete($culture_id)
    {
         $culture_id = decrypt($culture_id);
         $culture = Culture::find($culture_id);

         $culture->delete();
         return back();
    }
}
