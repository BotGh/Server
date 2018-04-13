<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    protected $primaryKey = 'menuId';

    public function dishes()
    {
        return $this->hasMany('App\Dishes','menu_id');
    }

    public function restaurant()
    {

        return $this->belongsTo('App\Restaurants');
    }
}
