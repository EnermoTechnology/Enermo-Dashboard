<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DashboardDevice extends Model
{
    protected $connection = 'gateway';
    protected $table = 'newdashboard';
    protected $primaryKey = 'device_id';
    protected $appends = ['running'];

    public function device()
    {
        return $this->belongsTo(Device::class, 'device_id');
    }

    public function getRunningAttribute()
    {
        return ($this->Ia > 5) && ($this->Ib > 5) && ($this->Ic > 5);
    }
}
