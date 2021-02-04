<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class RoomImage extends Model
{
    use Notifiable,
        SoftDeletes;
    public function Room(){
        return $this->belongsTo('App\Room','room_id','id');
    }
}
