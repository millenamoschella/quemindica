<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Culture;

class Culture_Segment extends Model
{
    // protected $fillable = [
    //     'tipo'
    // ]; 

    public function culture()
    {
        return $this->hasMany(Culture::class);
    }
}
