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
    public function followingUsers(User $user)
    {
        $users = User::all();
        return view('users.following', compact('users'));
    }

    public function __construct()
    {
        $this->middleware('auth');
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
}
