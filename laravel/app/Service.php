<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function segment()
    {
        return $this->belongsTo('App\Segment','segments_id');
    }

    public function post()
    {
        return $this->hasMany('App\Post', 'posts_id');
    }

    public function serviceRating()
    {
        return $this->belongsToMany('App\ServiceRating','service_ratings_id');
    }
}
