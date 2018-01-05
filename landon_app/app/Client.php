<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //establish relation with reservations
    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
}
