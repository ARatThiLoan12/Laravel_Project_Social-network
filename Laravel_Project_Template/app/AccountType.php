<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    //
    protected $table = "account_types";

    public function user(){
        return $this->hasMany('app\User', 'id_type', 'id');
    }
}
