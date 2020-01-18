<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    protected $connection = 'sqlsrv';
    protected $table='zCycles';
    protected $primaryKey = 'Cycle_name';

    public function sucocycle()
    {
        return $this->hasMany(SucoCycle::class,'CycleID');
    }
}
