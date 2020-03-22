<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ass extends Model
{
    //
    public function grass()
    {
        return $this->belongsTo('App\Models\Grass')->withDefault();
    }
}
