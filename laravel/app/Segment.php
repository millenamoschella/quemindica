<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    public function service()
    {
        return $this->hasMany('App\Service', 'services_id');
    }

    public function product()
    {
        return $this->hasMany('App\Product', 'products_id');
    }
}
