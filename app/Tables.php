<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    /*
   * one table has many workers
   */

    public function worker()
    {
        return $this->hasOne('App\Workers');
    }
}
