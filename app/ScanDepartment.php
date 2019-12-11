<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class ScanDepartment extends Model
{
    public $timestamps = false;

    public function scanpoints()
    {
        return $this->hasMany('App\Scanpoint');
    }
}