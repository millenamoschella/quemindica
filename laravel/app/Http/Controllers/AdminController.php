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
}
