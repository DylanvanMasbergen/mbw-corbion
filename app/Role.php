<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Venturecraft\Revisionable\Revisionable;

class Role extends Model
{
    public function user()
    {
        return $this->hasMany('App\User');
    }
}
