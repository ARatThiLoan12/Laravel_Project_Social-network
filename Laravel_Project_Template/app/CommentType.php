<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentType extends Model
{
    //
    protected $table = "comment_types";

    public function comment(){
        return $this->hasMany('app\Comment', 'comment_type', 'id');
    }
}
