<?php

namespace App\Http\Livewire;

use App\Models\ServerMonitor\Host;
use Livewire\Component;

class Dashboard extends Component
{
    /**
     * @var int
     */
    public $refreshed = 0;

    /**
     * @var string[]
     */
    protected $listeners = ['serverMonitorRun' => 'refreshComponent'];

    public function render()
    {
        $hosts = Host::all();

        return view('livewire.dashboard', [
            "hosts" => $hosts
        ]);
    }


    public function refreshComponent()
    {
        $this->refreshed++;
    }
}
