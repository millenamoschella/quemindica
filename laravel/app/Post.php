<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User','users_id');
    }

    public function service()
    {
        return $this->belongsTo('App\Service','services_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Product','products_id');
    }

    public function culture()
    {
        return $this->belongsTo('App\Culture', 'cultures_id');
    }

    public function reaction()
    {
        return $this->hasMany('App\Reaction', 'reactions_id');
    }

}
