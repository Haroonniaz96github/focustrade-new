<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function level(){

        return $this->hasMany('App\Level', 'parent_id');

    }
}
