<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $table = "messages";

    public function user(){
        return $this->hasMany('app\User', 'id', 'user_send');
        return $this->hasMany('app\User', 'id', 'user_receive');
    } 

    public function message_type(){
        return $this->belongsTo('app\MessageType', 'id', 'message_type');
    }
}
