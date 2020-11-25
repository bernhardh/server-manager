<?php

namespace App\ServerMonitor;

use Spatie\ServerMonitor\Manipulators\Manipulator;
use Spatie\ServerMonitor\Models\Check;
use Symfony\Component\Process\Process;

class CustomManipulator implements Manipulator
{
    public function manipulateProcess(Process $process, Check $check): Process
    {
        $definition = $check->getDefinition();

        if(isset($definition->disableRemoteConnection) && $definition->disableRemoteConnection) {
            $process = Process::fromShellCommandline($definition->command());
        }

        return $process;
    }
}
