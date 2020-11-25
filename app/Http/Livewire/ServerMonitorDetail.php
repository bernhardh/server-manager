<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ServerMonitorDetail extends Component
{
    /**
     * @var \App\Models\ServerMonitor\Check
     */
    public $check;


    public function render()
    {
        return view('livewire.server-monitor-detail');
    }
}
