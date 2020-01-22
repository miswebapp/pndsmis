<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipal extends Model
{
    protected $connection = 'sqlsrv';
    protected $table='dbo.zDistrict';
    protected $primaryKey = 'Distict_ID';

    public function posto()
    {
        return $this->hasMany(AdminPost::class,'District_ID');
    }
}
