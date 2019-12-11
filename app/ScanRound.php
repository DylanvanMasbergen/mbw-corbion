<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScanRound extends Model
{
    protected $fillable = [
        'start',
        'end',
        'day',
        'round',
        'shifttime_id',
    ];
    public $timestamps = false;

    public function ScannedPoint()
    {
        return $this->belongsTo('App\ScannedPoint');
    }
}
