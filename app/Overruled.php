<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Overruled extends Model
{
    
    public function Overruled()
    {
        return $this->HasMany('App\ScannedPoint');
    }
}
