<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equation extends Model
{
    public function author(){
        return $this->belongsTo(User::class,"foregin_key","ipAddress");
    }
}
