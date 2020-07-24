<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CultureRating extends Model
{
    public function culture()
    {
        return $this->belongsToMany('App\Culture','cultures_id');
    }

    public function Rating()
    {
        return $this->belongsToMany('App\Rating','ratings_id');
    }
}
