<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suco extends Model
{
    protected $connection = 'sqlsrv';
    protected $table='dbo.zSuco';
    protected $primaryKey = 'Suco_ID';

    public function aldeia()
    {
        return $this->hasMany(Aldeia::class,'Suco_ID');
    }
    
    public function posto()
    {
        return $this->belongsTo(AdminPost::class);
    }
}
