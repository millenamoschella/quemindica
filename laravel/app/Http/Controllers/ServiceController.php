<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Segment;
use App\User;
use App\Post;
use App\Rating;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMail;

class ServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function servicos(User $user)
    {
        $user = Auth::user();

        $postsUser = Post::all();


        return view('users.servicos', compact('user', 'postsUser'));
    }


    public function create()
    {
        return view('service.create');
    }


    public function insert(Request $request)
    {
        $phone = $request->input('phone');
        if (User::where('phone', '=', $phone)->count() > 0) {
            $provider = User::where('phone', '=', $phone)->first();

            $service = new Service();

            $service->segment_id = $request->get('segment_id');
            $service->nome_prestador = $provider->name;
            $service->user_id = $provider->id;
            $service->servico = $request->get('servico');
            $service->local = $request->get('local');


            // UPOLOAD DE IMAGEM

            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/photos/services/', $filename);
                $service->photo = $filename;
            } else {
                return $request;
                $service->photo = '';
            }


            $service->save();

            $rating = new Rating();

            $rating->nota = $request->get('nota');
            $rating->user_id = Auth::user()->id;
            $rating->service_id = $service->id;
            $rating->save();

            $post = new Post();

            $post->conteudo = $request->get('conteudo');
            $post->user_id = Auth::user()->id;
            $post->service_id = $service->id;


            $post->save();

            Mail::to($provider->email)->send(new SendMail($provider));


            Session::flash('message', 'Profissional indicado com sucesso!');
            return back();
        }


        $provider = new User();
        $provider->name = $request->get('name');
        $provider->username = $request->get('name') . rand(1, 99999);
        $provider->phone = $request->get('phone');
        $provider->email = $request->get('email');
        $provider->password = bcrypt('12345678');
        $provider->save();

        $service = new Service();

        $service->segment_id = $request->get('segment_id');
        $service->nome_prestador = $provider->name;
        $service->user_id = $provider->id;
        $service->servico = $request->get('servico');
        $service->local = $request->get('local');


        // UPOLOAD DE IMAGEM

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/photos/services/', $filename);
            $service->photo = $filename;
        } else {
            return $request;
            $service->photo = '';
        }


        $service->save();

        $rating = new Rating();

        $rating->nota = $request->get('nota');
        $rating->user_id = Auth::user()->id;
        $rating->service_id = $service->id;
        $rating->save();

        $post = new Post();

        $post->conteudo = $request->get('conteudo');
        $post->user_id = Auth::user()->id;
        $post->service_id = $service->id;


        $post->save();


        Mail::to($provider->email)->send(new SendMail($provider));


        return back();
    }
}
