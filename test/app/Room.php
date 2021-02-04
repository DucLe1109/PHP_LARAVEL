<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\RoomType;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Room extends Model
{
    use Notifiable,
        SoftDeletes;
    public function RoomType(){
        return $this->belongsTo('App\RoomType','room_type_id','id');
    }
    public function RoomImage(){
        return $this->hasMany('App\RoomImage','room_id','id');
    }
}
