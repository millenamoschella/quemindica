<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function segment ()
    {
        return $this->belongsTo('App\Segment','segments_id');
    }

    public function post()
    {
        return $this->hasMany('App\Post','posts_id');
    }

    public function productRating()
    {
        return $this->belongsToMany('App\ProductRating','product_ratings_id');
    }
}
