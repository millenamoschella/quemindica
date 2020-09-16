<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'nota', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function serviceRating()
    {
        return $this->belongsToMany('App\ServiceRating', 'service_ratings_id');
    }

    public function cultureRating()
    {
        return $this->belongsToMany('App\CultureRating','culture_ratings_id');
    }

    public function productRating()
    {
        return $this->belongsToMany('App\ProductRating', 'product_ratings_id');
    }
}
