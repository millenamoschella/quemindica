<?php

namespace App;

use App\Segment;
use App\Post;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function segment ()
    {
        return $this->belongsTo(Segment::class);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function productRating()
    {
        return $this->belongsToMany('App\ProductRating','product_ratings_id');
    }
}
