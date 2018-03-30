<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function dishes()
    {
        return $this->hasMany('App\Dishes');
    }

    public function restaurant()
    {

        return $this->belongsTo('App\Restaurants');
    }
}
