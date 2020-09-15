<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Comment;
use App\Culture;
use App\Follower;

class FriendController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function followingUsers($username)
    {
        $user = User::where('username', $username)->first();

        $users = User::orderby('created_at', 'DESC')->limit(9)->get();

        $follower = Follower::where('follower_id', '=', $user->id);

        return view('users.following', compact('user', 'users', 'follower'));
    }


    // --------- FUNÇÃO PARA SEGUIR UM USUÁRIO

    public function following($id)
    {
        $follow = new Follower();
        $follow->user_id = Auth::user()->id;
        $follow->follower_id = $id;
        $follow->save();

        return back();
    }




    public function unfollow($id)
    {
        $user = User::find($id);
        Auth::user()->unfollow($user);
        return back();
    }
}
