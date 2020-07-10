<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificationType extends Model
{
    //
    protected $table = "notification_types";

    public function notification(){
        return $this->hasMany('app\Notification', 'type', 'id');
    }
}
