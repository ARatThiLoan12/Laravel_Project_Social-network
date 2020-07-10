<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = "comments";

    public function user(){
        return $this->hasMany('app\User', 'id', 'content');
    }

    public function post(){
        return $this->hasMany('app\Post', 'id', 'post');
    }

    public function comment_type(){
        return $this->belongsTo('app\comment_type', 'id', 'comment_type');
    }
}
