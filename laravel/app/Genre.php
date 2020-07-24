<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function culture()
    {
        return $this->hasMany('App\Culture', 'cultures_id');
    }
}
