<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class RoomType extends Model
{
    use Notifiable,
        SoftDeletes;
    public function Rooms(){
        return $this->hasMany('App\Room','room_id','id');
    }
}
