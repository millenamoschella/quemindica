<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class HomeController extends Controller
{
    public function home(User $user)
    {
        $user = Auth::user();
        return view('home');
    }
}
