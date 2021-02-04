<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Role extends Model
{
    use Notifiable,
        SoftDeletes;
    public function permissions(){
        return $this->belongsToMany('App\Permission','permission_roles');
    }
}
