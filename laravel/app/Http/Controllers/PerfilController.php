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

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    // public function perfil(User $id, $username)
    // {

    //     $postsUser = Post::orderby('created_at', 'DESC')->get();

    //     $postsCulture = Culture::All();
    //     $commentsUser = Comment::All();
    //     $post = Post::find('culture_id');
    //     $user = Auth::user();

    //     $postsNull = Post::All();

    //     return view('users.perfil', compact('postsUser', 'commentsUser', 'postsCulture', 'post', 'postsNull', 'user'));
    // }
}
