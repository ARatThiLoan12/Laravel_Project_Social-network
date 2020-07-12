<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //
    protected $table = "notifications";

    public function user(){
        return $this->hasMany('app\User', 'id', 'user');
    }

    public function notification_type(){
        return $this->belongsTo('app\NotificationType', 'id', 'type');
    }
}
