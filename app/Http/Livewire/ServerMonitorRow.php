<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ServerMonitorRow extends Component
{
    /**
     * @var \App\Models\ServerMonitor\Check
     */
    public $check;

    /**
     * @var bool
     */
    public $showModal = false;


    public function render()
    {
        return view('livewire.server-monitor-row');
    }
}
