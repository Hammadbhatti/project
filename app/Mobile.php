<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    //
    public function user(){
        $this->belongsTo('App\User');
    }
}
