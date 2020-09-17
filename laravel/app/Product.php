<?php

namespace App;

use App\Segment;
use App\Post;
use App\Rating;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function segment()
    {
        return $this->belongsTo(Segment::class);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function rating()
    {
        return $this->hasMany(Rating::class);
    }
}
