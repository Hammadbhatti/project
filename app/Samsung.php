<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Samsung extends Model
{
    public function users(){
        $this->belongsTo('App\User');
    }
}
