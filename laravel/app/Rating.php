<?php

namespace App;

use App\User;
use App\Service;
use App\Culture;
use App\Product;


use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'nota', 'user_id', 'service'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function serviceRating()
    {
        return $this->belongsTo(Service::class);
    }

    public function productRating()
    {
        return $this->belongsTo(Product::class);
    }

    public function cultureRating()
    {
        return $this->belongsTo(Culture::class);
    }
}
