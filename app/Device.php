<?php

namespace App;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Cache;
use DB;

class Device extends Model
{
    // public const dashboard_nodes = ['Uab', 'Ubc', 'Uca', 'Ia', 'Ib', 'Ic', 'IaTHD', 'IbTHD', 'IcTHD', 'F', 'Iunbal', 'KVARHimp', 'KWHimp', 'PFtot', 'Ptot'];
    public const units = [
        [
            'node_name' => 'F',
            'node_unit' => 'Hz',
        ],
        [
            'node_name' => 'Ia',
            'node_unit' => 'A',
        ],
        [
            'node_name' => 'Ia10hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia11hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia12hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia13hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia14hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia15hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia16hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia17hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia18hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia19hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia20hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia21hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia22hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia23hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia24hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia25hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia26hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia27hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia28hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia29hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia2hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia30hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia31hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia3hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia4hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia5hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia6hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia7hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia8hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ia9hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'IaTHD',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib',
            'node_unit' => 'A',
        ],
        [
            'node_name' => 'Ib10hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib11hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib12hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib13hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib14hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib15hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib16hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib17hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib18hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib19hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib20hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib21hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib22hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib23hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib24hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib25hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib26hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib27hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib28hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib29hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib2hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib30hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib31hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib3hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib4hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib5hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib6hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib7hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib8hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ib9hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'IbTHD',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic',
            'node_unit' => 'A',
        ],
        [
            'node_name' => 'Ic10hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic11hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic12hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic13hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic14hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic15hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic16hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic17hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic18hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic19hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic20hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic21hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic22hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic23hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic24hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic25hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic26hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic27hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic28hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic29hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic2hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic30hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic31hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic3hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic4hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic5hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic6hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic7hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic8hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ic9hr',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'IcTHD',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Iunbal',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'KVARHimp',
            'node_unit' => 'kvarh',
        ],
        [
            'node_name' => 'KWHimp',
            'node_unit' => 'kWh',
        ],
        [
            'node_name' => 'Pa',
            'node_unit' => 'kW',
        ],
        [
            'node_name' => 'Pb',
            'node_unit' => 'kW',
        ],
        [
            'node_name' => 'Pc',
            'node_unit' => 'kW',
        ],
        [
            'node_name' => 'Ptot',
            'node_unit' => 'kW',
        ],
        [
            'node_name' => 'PtotDmd',
            'node_unit' => 'kW',
        ],
        [
            'node_name' => 'Qtot',
            'node_unit' => 'kvar',
        ],
        [
            'node_name' => 'Stot',
            'node_unit' => 'kVA',
        ],
        [
            'node_name' => 'Ua',
            'node_unit' => 'V',
        ],
        [
            'node_name' => 'Uab',
            'node_unit' => 'V',
        ],
        [
            'node_name' => 'UaTHD',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Ub',
            'node_unit' => 'V',
        ],
        [
            'node_name' => 'Ubc',
            'node_unit' => 'V',
        ],
        [
            'node_name' => 'UbTHD',
            'node_unit' => '%',
        ],
        [
            'node_name' => 'Uc',
            'node_unit' => 'V',
        ],
        [
            'node_name' => 'Uca',
            'node_unit' => 'V',
        ],
        [
            'node_name' => 'UcTHD',
            'node_unit' => '%',
        ],
    ];

    protected $connection = 'gateway';
    protected $table = 'device';
    protected $primaryKey = 'device_id';

    // protected $attributes = ['gwsn', 'device_id', 'channel_id', 'device_name', 'device_type', 'ratio'];

    public function dashboardDevice()
    {
        return $this->hasOne(DashboardDevice::class, 'device_id');
    }

    public function getLastUabAttribute()
    {
        try {
            $self = $this;
            $uab = Cache::remember($this->device_id . $this->channel_id . 'Uab', 300, function () use ($self) {
                return DB::table('realdata')->where('node_name', 'Uab')->where('device_id', $self->device_id)->where('channel_id', $self->channel_id)->orderBy('log_dt', 'DESC')->limit(1)->get()->first();
            });
            return $uab->node_value . $uab->node_unit;
        } catch (Exception $e) {
            return '-';
        }
    }

    public function getLastUbcAttribute()
    {
        try {
            $self = $this;
            $ubc = Cache::remember($this->device_id . $this->channel_id . 'Ubc', 300, function () use ($self) {
                return DB::table('realdata')->where('node_name', 'Ubc')->where('device_id', $self->device_id)->where('channel_id', $self->channel_id)->orderBy('log_dt', 'DESC')->limit(1)->get()->first();
            });
            return $ubc->node_value . $ubc->node_unit;
        } catch (Exception $e) {
            return '-';
        }
    }

    public function getLastUcaAttribute()
    {
        try {
            $self = $this;
            $uca = Cache::remember($this->device_id . $this->channel_id . 'Uca', 300, function () use ($self) {
                return DB::table('realdata')->where('node_name', 'Uca')->where('device_id', $self->device_id)->where('channel_id', $self->channel_id)->orderBy('log_dt', 'DESC')->limit(1)->get()->first();
            });
            return $uca->node_value . $uca->node_unit;
        } catch (Exception $e) {
            return '-';
        }
    }

    public function getLastIaAttribute()
    {
        try {
            $self = $this;
            $ia = Cache::remember($this->device_id . $this->channel_id . 'Ia', 300, function () use ($self) {
                return DB::table('realdata')->where('node_name', 'Ia')->where('device_id', $self->device_id)->where('channel_id', $self->channel_id)->orderBy('log_dt', 'DESC')->limit(1)->get()->first();
            });
            return $ia->node_value . $ia->node_unit;
        } catch (Exception $e) {
            return '-';
        }
    }

    public function getLastIbAttribute()
    {
        try {
            $self = $this;
            $ib = Cache::remember($this->device_id . $this->channel_id . 'Ib', 300, function () use ($self) {
                return DB::table('realdata')->where('node_name', 'Ib')->where('device_id', $self->device_id)->where('channel_id', $self->channel_id)->orderBy('log_dt', 'DESC')->limit(1)->get()->first();
            });
            return $ib->node_value . $ib->node_unit;
        } catch (Exception $e) {
            return '-';
        }
    }

    public function getLastIcAttribute()
    {
        try {
            $self = $this;
            $ic = Cache::remember($this->device_id . $this->channel_id . 'Ic', 300, function () use ($self) {
                return DB::table('realdata')->where('node_name', 'Ic')->where('device_id', $self->device_id)->where('channel_id', $self->channel_id)->orderBy('log_dt', 'DESC')->limit(1)->get()->first();
            });
            return $ic->node_value . $ic->node_unit;
        } catch (Exception $e) {
            return '-';
        }
    }
}
