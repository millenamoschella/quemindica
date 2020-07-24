<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Culture_Segment extends Model
{
    public function culture()
    {
        return $this->hasMany('App\Culture','cultures_id');
    }
}
