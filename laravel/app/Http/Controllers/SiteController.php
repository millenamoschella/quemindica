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

    public function termos()
    {
        return view('termos');
    }

    public function politicaDados()
    {
        return view('politica-dados');
    }

    public function politicaCookies()
    {
        return view('politica-cookies');
    }
}
