<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    public function genre()
    {
        return $this->belongsTo('App\Genre','genres_id');
    }

    public function post()
    {
        return $this->hasMany('App\Post', 'posts_id');
    }
    
    public function cultureRating()
    {
        return $this->belongsToMany('App\CultureRating','culture_ratings_id');
    }

    public function culture_segment()
    {
        return $this->belongsTo('App\Culture_Segment', 'culture__segments_id');
    }
}
