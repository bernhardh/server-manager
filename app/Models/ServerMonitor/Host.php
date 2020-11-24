<?php

namespace App\Models\ServerMonitor;
use Spatie\ServerMonitor\Models\Host as SpatieHost;

class Host extends SpatieHost
{
    protected $table = 'servermonitor_hosts';
}
