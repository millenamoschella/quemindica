<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;
use App\Culture;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function perfil(User $id)
    {

        $postsUser = Post::where('user_id', '=', Auth::user()->id)->orderby('created_at', 'DESC')->get();
        $postsCulture = Culture::All();
        $commentsUser = Comment::All();
        $post = Post::find('culture_id');

        return view('users.perfil', compact('postsUser', 'commentsUser', 'postsCulture', 'post'));
    }





    // public function perfil(User $id, User $username)
    // {
    //     $postsUser = Post::where('user_id', '=', Auth::user()->id)->get();
    //     $commentsUser = Comment::All();

    //     $username = Auth::user()->username;
    //     // dd($username);

    //     return view('users.perfil', compact('postsUser', 'commentsUser', 'username'));
    // }
}
