<?php

namespace App\Models\ServerMonitor;
use Spatie\ServerMonitor\Models\Check as SpatieCheck;

class Check extends SpatieCheck
{
    protected $table = 'servermonitor_checks';
}
