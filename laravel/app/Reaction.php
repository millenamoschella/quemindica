<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User','users_id');
    }

    public function post()
    {
        return $this->belongsTo('App\Post','posts_id');
    }
}
