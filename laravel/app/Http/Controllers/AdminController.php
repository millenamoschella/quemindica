<?php

namespace App\Http\Controllers;

use App\User;
use App\Culture;
use App\Service;
use App\Product;
use App\Post;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function users()
    {
        $cultures = Culture::all();
        $services = Service::all();
        $products = Product::all();
        $posts = Post::all();

        $busca = request('busca');
        $users = User::where('name', 'LIKE', '%' . $busca . '%')->paginate(5);

        return view('admin.admin-user', compact('users', 'cultures', 'posts', 'products', 'services'));
    }


    public function cultures()
    {
        $users = User::all();
        $services = Service::all();
        $products = Product::all();
        $posts = Post::all();

        $busca = request('busca');
        $cultures = Culture::where('titulo', 'LIKE', '%' . $busca . '%')->paginate(5);

        return view('admin.admin-culture', compact('users', 'cultures', 'posts', 'products', 'services'));
    }


    public function services()
    {
        $users = User::all();
        $cultures = Culture::all();
        $products = Product::all();
        $posts = Post::all();

        $busca = request('busca');
        $services = Service::where('servico', 'LIKE', '%' . $busca . '%')->paginate(5);

        return view('admin.admin-service', compact('users', 'cultures', 'posts', 'products', 'services'));
    }


    public function products()
    {
        $users = User::all();
        $cultures = Culture::all();
        $services = Service::all();
        $posts = Post::all();

        $busca = request('busca');
        $products = Product::where('nome', 'LIKE', '%' . $busca . '%')->paginate(5);

        return view('admin.admin-product', compact('users', 'cultures', 'posts', 'products', 'services'));
    }



    //////////////////// FUNÇÕES PARA APRESENTAR MAIS DETALHES


    // MOSTRAR UM USUÁRIO
    public function showUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.userShow', compact('user'));
    }


    // MOSTRAR UMA INDICAÇÃO DE CULTURA
    public function showCulture($culture_id)
    {
        $culture = User::findOrFail($culture_id);
        return view('admin.cultureShow', compact('culture'));
    }


    // MOSTRAR UMA INDICAÇÃO DE SERVIÇO
    public function showService($service_id)
    {
        $service = Service::findOrFail($service_id);
        return view('admin.serviceShow', compact('service'));
    }


    // MOSTRAR UMA INDICAÇÃO DE PRODUTO
    public function showProduct($product_id)
    {
        $product = Product::findOrFail($product_id);
        return view('admin.productShow', compact('culture'));
    }





    //////////////////// FUNÇÕES PARA DELETAR


    // DELETAR UM USUÁRIO
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();

        return back();
    }


    // DELETAR UMA INDICAÇÃO DE CULTURA
    public function deleteCulture($culture_id)
    {
        $culture = Culture::find($culture_id);
        $culture->delete();

        return back();
    }


    // DELETAR UMA INDICAÇÃO DE SERVIÇO
    public function deleteService($service_id)
    {
        $service = Service::find($service_id);
        $service->delete();

        return back();
    }


    // DELETAR UMA INDICAÇÃO DE PRODUTO
    public function deleteProduct($product_id)
    {
        $product = Product::find($product_id);
        $product->delete();

        return back();
    }
}
