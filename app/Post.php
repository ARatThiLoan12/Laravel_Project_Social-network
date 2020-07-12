<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = "posts";

    public function user(){
        return $this->hasMany('app\User', 'id', 'user_post');
    }

    public function like(){
        return $this->belongsTo('app\User', 'id', 'user_send');
    }

    public function comment(){
        return $this->belongsTo('app\Comment', 'id', 'id');
    }
}
