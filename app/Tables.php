<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    /*
   * one table has many workers
   */
    protected $primaryKey = 'tableId';

    public function worker()
    {
        return $this->hasOne('App\Workers');
    }

    public function tables()
    {
        return $this->belongsTo('App\Restaurant');
    }
}
