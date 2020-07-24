<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductRating extends Model
{
    public function product()
    {
        return $this->belongsToMany('App\Product','products_id');
    }

    public function Rating()
    {
        return $this->belongsToMany('App\Rating', 'ratings_id');
    }
}
