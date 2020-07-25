<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Service;
use App\Product;

class Segment extends Model
{
    public function service()
    {
        return $this->hasMany(Service::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
