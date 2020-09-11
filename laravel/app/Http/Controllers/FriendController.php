<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Comment;
use App\Culture;

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
}
