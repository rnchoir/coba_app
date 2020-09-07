<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = "booking";

    public function film_r(){
        return $this->belongsTo('App\film','film');
    }
    public function user_r(){
        return $this->belongsTo('App\User','user');
    }
}
