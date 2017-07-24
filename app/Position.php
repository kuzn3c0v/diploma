<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function user(){
        return $this->hasMany('App\User', 'role', 'id');
    }
}
