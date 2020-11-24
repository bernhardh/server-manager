<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\ServerMonitor\CheckRepository;

class ServerMonitorRun extends Component
{
    public function render()
    {
        return view('livewire.server-monitor-run');
    }


    public function run() {
        $checks = CheckRepository::allThatShouldRun();
        $checks->runAll();
        $this->emit("serverMonitorRun");
    }
}
