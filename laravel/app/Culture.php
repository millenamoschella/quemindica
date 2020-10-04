<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Genre;
use App\Post;
use App\Culture_Segment;
use App\Rating;

class Culture extends Model
{
    protected $fillable = [
        'titulo', 'plataforma', 'culture__segments_id'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }


    public function culture_segment()
    {
        return $this->belongsTo(Culture_Segment::class, 'culture__segments_id');
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
