<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function perfil()
    {
        return view('users.perfil');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
