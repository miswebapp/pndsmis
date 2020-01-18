<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $connection = 'sqlsrv';
    protected $table='Suco_SubProject';
    protected $primaryKey = 'Suco_SubProject_ID';
    protected $dateFormat = 'U';

    public function location($id)
    {
       return Aldeia::find($id)->Aldeia_name;
    }

    public function sucoCycle()
    {
        return $this->belongsTo(SucoCycle::class);
    }

    public function cycle()
    {
        return $this->hasMany(Cycle::class);
    }

    public function status($id)
    {
        return ProjectStatus::find($id)->SubprojectStatus;
    }

    public function getStartDateAttribute()
    {
        return date('Y-m-d', strtotime($this->Subproject_Start_Date));
    }

    public function getFinishDateAttribute()
    {
        return date('Y-m-d', strtotime($this->Subproject_Finish_Date));
    }


}
