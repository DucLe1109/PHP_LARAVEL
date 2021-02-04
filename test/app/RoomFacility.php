<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class RoomFacility extends Model
{
    use Notifiable,
        SoftDeletes;

    public function Facility()
    {
        return $this->belongsTo('App\Facility');
    }

    public function Room()
    {
        return $this->belongsTo('App\Room');
    }
}
