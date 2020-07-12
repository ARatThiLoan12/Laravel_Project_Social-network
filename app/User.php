<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table= "users";

    public function account_type(){
    	return $this->belongsTo('app\AccountType', 'id', 'account_type');
    }

    public function friend(){
        return $this->belongsTo('app\Friend', 'user_send', 'id');
        return $this->belongsTo('app\Friend', 'user_receive', 'id');
    }

    public function like(){
        return $this->belongsTo('app\Like', 'user', 'id');
    }

    public function post(){
        return $this->belongsTo('app\Post', 'user_post', 'id');
    }

    public function comment(){
        return $this->belongsTo('app\Comment', 'user', 'id');
    }

    public function message(){
        return $this->belongsTo('app\Message', 'user_send', 'id');
        return $this->belongsTo('app\Message', 'user_receive', 'id');
    }

    public function notification(){
        return $this->belongsTo('app\Notification', 'user', 'id');
    }
}
