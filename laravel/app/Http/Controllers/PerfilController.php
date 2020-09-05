<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;

class PerfilController extends Controller
{
    public function perfil()
    {

        $postsUser = Post::All();
        $commentsUser = Comment::All();

        return view('users.perfil', compact('postsUser', 'commentsUser'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }


    // public function photoCreate()
    // {
    //     return view('photo.create');
    // }


    // public function photoStore(Request $request)
    // {
    //     $photo = new User();

    //     $photo->photo = $request->input('upload');

    //     if ($request->hasFile('photo')) {
    //         $file = $request->file('photo');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = time() . '.' . $extension;
    //         $file->move('public/imagens/minhaConta', $filename);
    //         $photo->photo = $filename;
    //     } else {
    //         return $request;
    //         $photo->photo = '';
    //     }

    //     $photo->save();


    //     return redirect()->route('perfil')
    //         ->with('success', 'photo criada com sucesso');
    // }

    // public function photoEdit($id)
    // {
    //     $photo = User::find($id);
    //     return view('photo.edit', compact('photo'));
    // }


    // public function update(Request $request, $id)
    // {

    //     $photo = User::findOrFail($id);

    //     $photoDefault = 'storage/app/public/photos/' . $photo->photo;

    //     $photo->photo = $request->input('photo');

    //     if ($request->hasFile('photo')) {

    //         unlink($photoDefault);

    //         $file = $request->file('photo');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = time() . '.' . $extension;
    //         $file->move('public/imagens/minhaConta', $filename);
    //         $photo->photo = $filename;
    //     } else {
    //         return $request;
    //         $photo->photo = '';
    //     }

    //     $photo->save();


    //     return redirect()->route('perfil')
    //         ->with('success', 'photo atualizada com sucesso');
    // }
}
