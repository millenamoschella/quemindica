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
        'name', 'lastname', 'username', 'email', 'password', 'cpf', 'phone', 'street', 'neighborhood', 'city', 'state', 'zip_code', 'about', 'photo', 'born_date', 'cover'
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

    public function posts()
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


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }


    public function followers()
    {
        return $this->belongsToMany(User::class, 'followers', 'user_id', 'follower_id');
    }


    public function followings()
    {
        return $this->belongsToMany(User::class, 'followers', 'follower_id', 'user_id');
    }


    public function isFollowing(User $user)
    {
        return !!$this->following()->where('follower_id', $user->id)->count();
    }


    public function isFollowedBy(User $user)
    {
        return !!$this->followers()->where('user_id', $user->id)->count();
    }



    public function unfollow(User $user)
    {
        return $this->followers()->detach($user->id);
    }
}
