<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Venturecraft\Revisionable\Revisionable;

class Scanpoint extends Revisionable
{
    public $timestamps = false;

    protected $revisionEnabled = true;
    protected $revisionCreationsEnabled = true;

    protected $fillable = [
        'created_at',
        'updated_at',
    ];
    
    public function scandepartment()
    {
        return $this->belongsTo('App\Post');
    }
}
