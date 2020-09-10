<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Segment;
use App\Post;
use Auth;

class ProductController extends Controller
{
    public function create()
    {
         return view('product.create');
    }


    public function insert(Request $request)
    {

         $product = new Product();
         
         $product->segment_id = $request->get('segment_id');
         $product->nome = $request->get('nome');
         $product->marca = $request->get('marca');
         $product->valor = $request->get('valor');
         $product->loja = $request->get('loja');
         $product->save();

         $post = new Post();

         $post->conteudo = $request->get('conteudo');
         $post->user_id = Auth::user()->id;
         $post->product_id = $product->id;

     //     $post = Post::all();



         $post->save();
         return back();
    }


    public function delete($product_id)
    {
         $product_id = decrypt($product_id);
         $product = Culture::find($product_id);

         $product->delete();
         return back();
    }
}
