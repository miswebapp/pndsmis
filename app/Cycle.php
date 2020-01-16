<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    protected $connection = 'sqlsrv';
    protected $table='dbo.zCycles';
    protected $primaryKey = 'Cycle_ID';
}
