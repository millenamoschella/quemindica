<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Segment;
use App\User;
use App\Post;
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

         $provider = new User();
         $provider->name = $request->get('name');
         $provider->username = $request->get('name').rand(1, 99999);
         $provider->phone = $request->get('phone');
         $provider->email = $request->get('email');
         $provider->password = bcrypt('12345678');
         $provider->save();

        //  'name' => $data['name'],
        //  'lastname' => $data['lastname'],
        //  'username' => $data['username'],
        //  'email' => $data['email'],
        //  'password' => Hash::make($data['password']),
        //  'phone' => $data['phone'],


         $service = new Service();

         $service->segment_id = $request->get('segment_id');
         $service->nome_prestador = $provider->name;
         $service->user_id = $provider->id;
         $service->servico = $request->get('servico');
         $service->save();




         $post = new Post();

         $post->conteudo = $request->get('conteudo');
         $post->user_id = Auth::user()->id;
         $post->service_id = $service->id;

        //     $post = Post::all();



         $post->save();
         return back();
    }
}
