<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageType extends Model
{
    //
    protected $table = "message_types";

    public function message(){
        return $this->belongsTo('app\Message', 'message_type', 'id');
    }
}
