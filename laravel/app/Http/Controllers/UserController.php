<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;
use App\Culture;
use Illuminate\Support\Facades\Auth;
use App\Follower;
use App\Product;
use App\Rating;
use App\Service;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    // --------------- FUNÇÃO DE UPLOAD PARA FOTO PERFIL

    public function create()
    {
        return view('create');
    }


    public function store(Request $request, $id)
    {

        $photo = User::findOrFail($id);

        // $photoAntiga = 'uploads/photos' . $photo->photo;

        if ($request->hasFile('photo')) {

            // unlink($photoAntiga);

            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/photos/', $filename);
            $photo->photo = $filename;
        } else {
            return $request;
            $photo->photo = '';
        }

        $photo->save();
        return back();
    }


    // --------------- FUNÇÃO DE UPLOAD PARA CAPA DO PERFIL

    public function createCover()
    {
        return view('create');
    }


    public function storeCover(Request $request, $id)
    {

        $cover = User::findOrFail($id);

        // $coverAntiga = 'uploads/photos/cover/' . $cover->cover;

        if ($request->hasFile('cover')) {

            // unlink($coverAntiga);

            $fileCover = $request->file('cover');
            $extensionCover = $fileCover->getClientOriginalExtension();
            $filenameCover = time() . '.' . $extensionCover;
            $fileCover->move('uploads/photos/cover/', $filenameCover);
            $cover->cover = $filenameCover;
        } else {
            return $request;
            $cover->cover = '';
        }

        $cover->save();
        return back();
    }



    // --------------- FUNÇÕES PARA EDITAR O PERFIL

    public function editProfile($id)
    {
        $user = User::find($id);
        return view('users.editarperfil', compact('user'));
    }


    public function updateProfile(Request $request, $id)
    {

        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->cpf = $request->input('cpf');
        $user->zip_code = $request->input('zip_code');
        $user->street = $request->input('street');
        $user->neighborhood = $request->input('neighborhood');
        $user->city = $request->input('city');
        $user->state = $request->input('state');
        $user->born_date = $request->input('born_date');
        $user->about = $request->input('about');

        $user->save();


        return redirect()->route('user', Auth::user()->username);
    }


    // --------------- FUNÇÃO USERNAME URL
    public function username($username)
    {

        // Usuários
        $user = User::where('username', $username)->first();
        $users = User::orderby('created_at', 'DESC')->limit(9)->get();

        if (!$user)
            abort(404);

        // Posts dos usuários
        $postsUser = Post::where(function ($query) use ($user) {
            $query->where('user_id', $user->id)
                ->orWhere('user_id', $user->id);
        })
            ->orderBy('created_at', 'DESC')->get();

        // Serviços do usuário
        $postsServices = Service::orderBy('created_at', 'DESC')->limit(6)->get();

        // Comentários dos usuários
        $commentsUser = Comment::limit(3)->get();

        // Posts de cultura do usuário
        $postsCulture = Culture::All();






        // Pegando as notas de um usuário - serviço:
        $serviceUser = Service::where('user_id', '=', $user->id)->pluck('id'); // retorna id de serviço QUANDO é daquele usuário

        $ratings = Rating::whereIn('service_id', $serviceUser)->pluck('nota');
        $countRatings = count($ratings);
        if ($countRatings > 0) {
            $averageRating = $ratings->sum() / $countRatings;
        } else {
            $averageRating = 0;
        }



        // Pegando as notas de um usuário - cultura:
        $cultureRating = Culture::pluck('id'); // retorna id de serviço QUANDO é daquele usuário

        $ratingsCulture = Rating::whereIn('culture_id', $cultureRating)->pluck('nota');
        $countRatingCulture = count($ratingsCulture);
        if ($countRatingCulture > 0) {
            $averageRatingCulture = $ratingsCulture->sum() / $countRatingCulture;
        } else {
            $averageRatingCulture = 0;
        }


        // Pegando as notas de um usuário - produto:
        $productRating = Product::pluck('id'); // retorna id de serviço QUANDO é daquele usuário

        $ratingsProduct = Rating::whereIn('product_id', $productRating)->pluck('nota');
        $countRatingsProduct = count($ratingsProduct);
        if ($countRatingsProduct > 0) {
            $averageRatingProduct = $ratingsProduct->sum() / $countRatingsProduct;
        } else {
            $averageRatingProduct = 0;
        }


        // variável pra identificar se o usuário já segue alguém
        $follower = Follower::where('follower_id', '=', $user->id)
            ->where('user_id', '=', Auth::user()->id)->first();


        return view('users.perfil', compact(
            'postsUser',
            'commentsUser',
            'postsCulture',
            'user',
            'users',
            'follower',
            'ratings',
            'averageRating',
            'countRatings',
            'postsServices',
            'cultureRating',
            'averageRatingCulture',
            'countRatingCulture',
            'productRating',
            'averageRatingProduct',
            'countRatingsProduct'
        ));
    }



    // --------------- MOSTRAR TODOS OS USUÁRIOS
    public function users($username)
    {

        $user = User::where('username', $username)->first();
        $users = User::orderby('created_at', 'DESC')->limit(9)->get();

        $follower = Follower::where('follower_id', '=', $user->id)
            ->where('user_id', '=', Auth::user()->id)->first();


        return view('users.users', compact('users', 'follower', 'user'));
    }
}
