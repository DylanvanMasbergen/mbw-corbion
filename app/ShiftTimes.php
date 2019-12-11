<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShiftTimes extends Model
{
    public $timestamps = false;
    public function ScanRound()
    {
        return $this->belongsTo('App\ShiftTimes');
    }
}
