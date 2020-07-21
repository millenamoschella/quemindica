<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function segment ()
    {
        return $this->belongsTo('App\Segment','segments_id');
    }
}
