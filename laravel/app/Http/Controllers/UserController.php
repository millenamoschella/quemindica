<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;
use App\Culture;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    // --------------- FUNÇÃO DE UPLOAD PARA FOTO PERFIL

    public function create()
    {
        return view('create');
    }


    public function store(Request $request, $id)
    {

        $photo = User::findOrFail($id);

        // $photoAntiga = 'uploads/photos' . $photo->photo;

        if ($request->hasFile('photo')) {

            // unlink($photoAntiga);

            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/photos/', $filename);
            $photo->photo = $filename;
        } else {
            return $request;
            $photo->photo = '';
        }

        $photo->save();
        return back();
    }


    // --------------- FUNÇÃO DE UPLOAD PARA CAPA DO PERFIL

    public function createCover()
    {
        return view('create');
    }


    public function storeCover(Request $request, $id)
    {

        $cover = User::findOrFail($id);

        // $coverAntiga = 'uploads/photos/cover/' . $cover->cover;

        if ($request->hasFile('cover')) {

            // unlink($coverAntiga);

            $fileCover = $request->file('cover');
            $extensionCover = $fileCover->getClientOriginalExtension();
            $filenameCover = time() . '.' . $extensionCover;
            $fileCover->move('uploads/photos/cover/', $filenameCover);
            $cover->cover = $filenameCover;
        } else {
            return $request;
            $cover->cover = '';
        }

        $cover->save();
        return back();
    }



    // --------------- FUNÇÕES PARA EDITAR O PERFIL

    public function editProfile($id)
    {
        $user = User::find($id);
        return view('users.editarperfil', compact('user'));
    }


    public function updateProfile(Request $request, $id)
    {

        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->cpf = $request->input('cpf');
        $user->zip_code = $request->input('zip_code');
        $user->street = $request->input('street');
        $user->neighborhood = $request->input('neighborhood');
        $user->city = $request->input('city');
        $user->state = $request->input('state');
        $user->born_date = $request->input('born_date');
        $user->about = $request->input('about');

        $user->save();


        return redirect()->route('perfil');
    }


    public function username($username)
    {
        $user = User::where('username', $username)->first();

        if (!$user)
            abort(404);

        $postsUser = Post::where(function ($query) use ($user) {
            $query->where('user_id', $user->id)
                ->orWhere('user_id', $user->id);
        })
            ->orderBy('created_at', 'desc')->get();


        $commentsUser = Comment::orderBy('updated_at', 'desc')->limit(3)->get();
        $postsCulture = Culture::All();
        $post = Post::find('culture_id');

        return view('users.perfil', compact('postsUser', 'commentsUser', 'postsCulture', 'post', 'user',));
    }
}
