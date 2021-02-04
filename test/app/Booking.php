<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Booking extends Model
{
    use Notifiable,
        SoftDeletes;
    public function Guest(){
        return $this->belongsTo('App\Guest');
    }
    public function Room(){
        return $this->belongsTo('App\Room');
    }
    public function RoomBooking(){
        return $this->hasOne('App\RoomBooking');
    }
}
