<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminPost extends Model
{
    protected $connection = 'sqlsrv';
    protected $table='dbo.zSubdistrict';
    protected $primaryKey = 'Subdistrict_ID';

    public function suco()
    {
        return $this->hasMany(Suco::class,'SubDistrict_ID');
    }

    public function municipal()
    {
        return $this->belongsTo(Municipal::class);
    }
}
