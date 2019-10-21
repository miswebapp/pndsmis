<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aldeia extends Model
{
    protected $connection = 'sqlsrv';
    protected $table='dbo.zAldeia';
    protected $primaryKey = 'ID';

    public function suco()
    {
        return $this->belongsTo(Suco::class);
    }

    public function project()
    {
        return $this->hasMany(Project::class,'Subproject_Aldea');
    }
}
