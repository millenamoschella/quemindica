<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Segment;
use App\Post;

class Service extends Model
{
    protected $fillable=[
       'servico', 'nome_prestador', 'telefone', 'valor', 'coordenadas' 
    ];

    public function segment()
    {
        return $this->belongsTo(Segment::class);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function serviceRating()
    {
        return $this->belongsToMany('App\ServiceRating','service_ratings_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
