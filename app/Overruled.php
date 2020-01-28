<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Overruled extends Model
{
    
    public function OverruledScannedpoints()
    {
    	// de kolom 'overruleds_id' van scannedpoint wijst terug naar de kolom id van dit overruled record
        return $this->HasMany('App\ScannedPoint', 'overruleds_id', 'id');
    }
}
