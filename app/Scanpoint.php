<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scanpoint extends Model
{
    public $timestamps = false;
    public function scandepartment()
    {
        return $this->belongsTo('App\Post');
    }
}
