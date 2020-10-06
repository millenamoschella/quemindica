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
        $users = User::all();
        $cultures = Culture::all();
        $services = Service::all();
        $products = Product::all();
        $posts = Post::all();

        return view('admin.admin-user', compact('users', 'cultures', 'posts', 'products', 'services'));
    }


    public function cultures()
    {
        $users = User::all();
        $cultures = Culture::all();
        $services = Service::all();
        $products = Product::all();
        $posts = Post::all();

        return view('admin.admin-culture', compact('users', 'cultures', 'posts', 'products', 'services'));
    }


    public function services()
    {
        $users = User::all();
        $cultures = Culture::all();
        $services = Service::all();
        $products = Product::all();
        $posts = Post::all();

        return view('admin.admin-service', compact('users', 'cultures', 'posts', 'products', 'services'));
    }


    public function products()
    {
        $users = User::all();
        $cultures = Culture::all();
        $services = Service::all();
        $products = Product::all();
        $posts = Post::all();

        return view('admin.admin-product', compact('users', 'cultures', 'posts', 'products', 'services'));
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
