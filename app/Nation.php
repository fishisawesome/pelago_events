<?php

namespace App;

use \Illuminate\Database\Eloquent\Model;

class Nation extends Model
{
    /**
    * Relationships
    */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
