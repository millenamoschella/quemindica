<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = ('/perfil');

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['string', 'max:25'],
            'username' => ['required', 'string', 'max:20', 'unique:users', 'alpha_dash'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'min:11', 'max:14', 'unique:users'],
            // 'cpf' => ['string', 'min:8', 'max:13'],
            // 'zip_code' => ['string', 'max:11'],
            // 'street' => ['string', 'max:25'],
            // 'neighborhood' => ['string', 'max:20'],
            // 'city' => ['string', 'max:20'],
            // 'state' => ['string', 'max:2'],
            // 'born_date' => ['date_format:Y-m-d'],
            // 'photo' => ['string', 'max:255'],
            // 'about' => ['string', 'max:50'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            // 'cpf' => $data['cpf'],
            // 'zip_code' => $data['zip_code'],
            // 'street' => $data['street'],
            // 'neighborhood' => $data['neighborhood'],
            // 'city' => $data['city'],
            // 'state' => $data['state'],
            // 'born_date' => $data['born_date'],
            // 'photo' => $data['photo'],
            // 'about' => $data['about'],
        ]);
    }
}
