<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Culture;
use App\Culture_Segment;

class CultureController extends Controller
{
    public function create()
    {
         return view('culture.create');
    }


    public function insert(Request $request)
    {

         $culture = new Culture();
         
         $culture->culture__segments_id = $request->get('culture__segments_id');
         $culture->titulo = $request->get('titulo');
         $culture->plataforma = $request->get('plataforma');


         $culture->save();
         return back();
    }


    public function delete($culture_id)
    {
         $culture_id = decrypt($culture_id);
         $culture = Culture::find($culture_id);

         $culture->delete();
         return back();
    }
}
