<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GraphData extends Model
{
    protected $connection = 'gateway';
    protected $table = 'graph5days';
}
