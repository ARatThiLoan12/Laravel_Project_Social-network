<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    //
    protected $table = "friends";

    public function user(){
        return $this->hasMany('app\User', 'id', 'user_send');
        return $this->hasMany('app\User', 'id', 'user_receive');
    }
}
