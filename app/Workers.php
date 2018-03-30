<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    public function table()
    {
        return $this->belongsTo('App\Tables');
    }
}
