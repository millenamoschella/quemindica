<?php

namespace App;

use App\User;
use App\Post;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
