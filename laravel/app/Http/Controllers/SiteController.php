<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function sobre()
    {
        return view('site.sobre');
    }

    public function faq()
    {
        return view('site.faq');
    }


    public function politicasTermos()
    {
        return view('site.politicas-termos');
    }


    public function suporte()
    {
        return view('site.suporte');
    }
}
