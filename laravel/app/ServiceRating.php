<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceRating extends Model
{
    public function service()
    {
        return $this->belongsToMany('App\Service','services_id');
    }

    public function Rating()
    {
        return $this->belongsToMany('App\Rating', 'ratings_id');
    }
}
