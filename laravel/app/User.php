<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Rating;
use App\Reaction;
use App\Service;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'sobrenome', 'email', 'password', 'cpf', 'telefone', 'logradouro', 'bairro', 'cidade', 'estado', 'cep', 'sobre', 'foto', 'nascimento'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function post()
    {
        return $this->hasMany('App\Post', 'posts_id');
    }

    public function rating()
    {
        return $this->hasMany(Rating::class);
    }

    public function reaction()
    {
        return $this->hasMany(Reaction::class);
    }

    public function followers()
    {
        return $this->belongsToMany('App\User', 'user_user', 'user_id', 'follower_id');
    }
   
}
