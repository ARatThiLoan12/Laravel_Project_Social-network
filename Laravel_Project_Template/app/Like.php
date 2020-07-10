<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    protected $table = "likes";

    public function user(){
        return $this->hasMany('app\User', 'id', 'user');
    }
    public function post(){
        return $this->hasMany('app\Post', 'id', 'post');
    }
}
