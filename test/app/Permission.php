<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Permission extends Model
{
    use Notifiable,
        SoftDeletes;
    public function Permission_childrent(){
        return $this->hasMany(Permission::class,'parent_id');
    }
}
