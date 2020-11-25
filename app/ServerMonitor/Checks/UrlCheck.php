<?php

namespace App\ServerMonitor\Checks;

use Spatie\ServerMonitor\CheckDefinitions\CheckDefinition;
use Symfony\Component\Process\Process;
use GuzzleHttp\Client;


class UrlCheck extends CheckDefinition
{
    /**
     * @var bool
     */
    public $disableRemoteConnection = true;

    /**
     * @var string
     */
    public $command = '';


    /**
     * @param \Symfony\Component\Process\Process $process
     * @return mixed
     */
    public function resolve(Process $process)
    {
        $client = new Client();
        $error = false;

        foreach($this->check->getCustomProperty('urls') AS $url) {
            $response = $client->get($url);
            if($response->getStatusCode() !== 200) {
                $error = true;
                $this->check->fail('Url check returned status code '. $response->getStatusCode());
            }
        }

        if(!$error) {
            $this->check->succeed('Url check returned status code 200 on all urls');
        }
    }
}
