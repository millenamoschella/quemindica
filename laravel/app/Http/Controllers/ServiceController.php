<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ServiceController extends Controller
{
    public function servicos(User $user)
    {
        $user = Auth::user();
        return view('users.servicos', compact('user'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
