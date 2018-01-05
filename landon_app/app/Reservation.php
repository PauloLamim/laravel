<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //add belong to relationship to reservations model
    public function client()
    {
        return $this->belongsTo('App\Client', 'client_id', 'id'); //two keys to compare
    }

    public function room()
    {
        return $this->belongsTo('App\Room', 'room_id', 'id');
    }
}
