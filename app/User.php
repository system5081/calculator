<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function equations(){
        return $this->hasMany(Equation::class);
    }
}
