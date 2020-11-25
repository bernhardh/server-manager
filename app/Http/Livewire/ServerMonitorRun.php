<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\ServerMonitor\CheckCollection;
use Spatie\ServerMonitor\CheckRepository;

class ServerMonitorRun extends Component
{
    /**
     * @var \App\Models\ServerMonitor\Host
     */
    public $host;

    /**
     * @var
     */
    public $slot;

    public function render()
    {
        return view('livewire.server-monitor-run');
    }


    public function run() {
        if(isset($this->host) && $this->host) {
            $checks = new CheckCollection($this->host->checks->filter->shouldRun());
        }
        else {
            $checks = CheckRepository::allThatShouldRun();
        }

        $checks->runAll();
        $this->emit("serverMonitorRun");
    }
}
