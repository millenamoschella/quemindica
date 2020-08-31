<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function amigosPag()
    {
        return view('users.amigos');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
