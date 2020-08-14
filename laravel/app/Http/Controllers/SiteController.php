<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function sobre()
    {
        return view('sobre');
    }

    public function faq()
    {
        return view('faq');
    }


    public function politicasTermos()
    {
        return view('politicas-termos');
    }
}
