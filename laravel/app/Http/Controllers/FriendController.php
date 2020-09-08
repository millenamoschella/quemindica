<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class FriendController extends Controller
{
    public function amigosPag(User $user)
    {
        $user = Auth::user();
        return view('users.amigos');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
