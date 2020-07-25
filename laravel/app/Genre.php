<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Culture;

class Genre extends Model
{
    protected $fillable = ['genero'];
    
    public function culture()
    {
        return $this->hasMany('App\Culture', 'cultures_id');
    }
}
