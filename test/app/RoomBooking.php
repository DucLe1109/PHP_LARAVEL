<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class RoomBooking extends Model
{
    use Notifiable,
        SoftDeletes;
}
