<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SucoCycle extends Model
{
    protected $connection = 'sqlsrv';
    protected $table='dbo.Suco_Cycles';
    protected $primaryKey = 'Suco_CycleID';

    public function projects()
    {
        return $this->hasMany(Project::class,'Suco_CycleID');
    }

    public function sucos()
    {
        return $this->belongsTo(Suco::class,'Suco_ID');
    }

    public function cycles()
    {
        return $this->belongsTo(Cycle::class,'CycleID');
    }
}
