<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ServerMonitorTable extends Component
{
    /**
     * @var \App\Models\ServerMonitor\Host
     */
    public $host;


    public function render()
    {
        return view('livewire.server-monitor-table');
    }
}
