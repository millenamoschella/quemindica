<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function usuarios()
    {
        return view('admin.admin-usuarios');
    }


    public function indicacoes()
    {
        return view('admin.admin-indicacoes');
    }


    public function servicos()
    {
        return view('admin.admin-servicos');
    }
}
