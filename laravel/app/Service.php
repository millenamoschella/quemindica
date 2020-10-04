<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Segment;
use App\Post;
use App\Rating;

class Service extends Model
{
    protected $fillable = [
        'servico', 'nome_prestador', 'telefone', 'valor', 'coordenadas'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function segment()
    {
        return $this->belongsTo(Segment::class);
    }


    public function post()
    {
        return $this->hasMany(Post::class);
    }


    public function rating()
    {
        return $this->hasMany(Rating::class);
    }
}
