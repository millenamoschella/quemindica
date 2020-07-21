<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function segment()
    {
        return $this->belongsTo('App\Segments','segment_id');
    }
}
