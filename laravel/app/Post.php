<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Service;
use App\Products;
use App\Culture;
use App\Reaction;

class Post extends Model
{
    protected $fillable = [
        'conteudo', 'user_id', 'culture_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function culture()
    {
        return $this->belongsTo(Culture::class, 'culture_id');
    }

    public function reaction()
    {
        return $this->hasMany(Reaction::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'DESC');
    }
}
