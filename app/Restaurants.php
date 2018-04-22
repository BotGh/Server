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

    public function ResTables(){

        return $this->hasMany('App/Tables');

    }

}
