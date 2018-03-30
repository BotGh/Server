<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = array('userName','firstName',
        'secondName','phoneNo',
        'password','isRestaurantManger');
}
