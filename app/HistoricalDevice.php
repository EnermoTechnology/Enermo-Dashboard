<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoricalDevice extends Model
{
    protected $connection = 'gateway';
    protected $table = 'hist5days';
}
