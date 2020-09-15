<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(User $user)
    {
        $user = User::all();

        return view('home', compact('user'));
    }
}
