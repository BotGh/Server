<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dishes extends Model
{
    protected $table = 'dishes';
    protected $primaryKey = 'dishId';


    public function menu()
    {
        return $this->belongsTo('App\Menu');
    }
}
