<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function servicos()
    {
        return view('users.servicos');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
