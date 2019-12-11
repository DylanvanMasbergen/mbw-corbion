<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScannedPoint extends Model
{
    public $timestamps = false;
    public function Scanpoint()
    {
        return $this->hasMany('App\Scanpoint');
    }
   
}
