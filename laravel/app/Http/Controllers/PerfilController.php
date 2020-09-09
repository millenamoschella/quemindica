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
        // $postsUser = Post::where('user_id', '=', Auth::user()->id)->orderby('created_at', 'DESC')->limit(3)->get();
        $postsCulture = Culture::All();
        $commentsUser = Comment::All();
        $post = Post::find('culture_id');
        $user = Auth::user();
        $postsNull = Post::all();

        return view('users.perfil', compact('postsUser', 'commentsUser', 'postsCulture', 'post', 'user', 'postsNull'));
    }





































    public function loadMore()
    {
        $this->perPage = $this->perPage + 3;
    }
}
