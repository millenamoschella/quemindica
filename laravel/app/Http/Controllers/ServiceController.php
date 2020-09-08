<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ServiceController extends Controller
{
    public function servicos(User $user)
    {
        $user = Auth::user();
        return view('users.servicos', compact('user'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
         return view('service.create');
    }


    public function insert(Request $request)
    {

        //  $provider = new User();
         
        //  $provider->name = $request->get('name');
        //  $provider->titulo = $request->get('titulo');
        //  $provider->plataforma = $request->get('plataforma');
        //  $provider->save();

        //  'name' => $data['name'],
        //  'lastname' => $data['lastname'],
        //  'username' => $data['username'],
        //  'email' => $data['email'],
        //  'password' => Hash::make($data['password']),
        //  'phone' => $data['phone'],
         
         
        //  $culture = new Culture();
         
        //  $culture->culture__segments_id = $request->get('culture__segments_id');
        //  $culture->titulo = $request->get('titulo');
        //  $culture->plataforma = $request->get('plataforma');
        //  $culture->save();

         
         
         
        //  $post = new Post();

        //  $post->conteudo = $request->get('conteudo');
        //  $post->user_id = Auth::user()->id;
        //  $post->culture_id = $culture->id;

     //     $post = Post::all();



        //  $post->save();
        //  return back();
    }
}
