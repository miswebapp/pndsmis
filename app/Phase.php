<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    protected $connection = 'sqlsrv';
    protected $table='dbo.zSuco_phase';
    protected $primaryKey = 'ID';
}
