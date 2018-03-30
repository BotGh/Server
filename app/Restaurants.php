<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    /*
    * one restaurant has many menus
    */

    public function ResMenus()
    {

        return $this->hasMany('App/Menu');
    }
}
