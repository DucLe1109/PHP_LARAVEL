<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Guest extends Model
{
    use Notifiable,
        SoftDeletes;
    protected $guarded = [];

    public function Booking(){
        return $this->hasOne('App\Booking');
    }
}
