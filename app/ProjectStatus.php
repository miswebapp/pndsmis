<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectStatus extends Model
{
    protected $connection ='sqlsrv';
    protected $table = 'zSubprojectStatus';
    protected $primaryKey = 'SubprojectStatusID';
    
}
