<?php
namespace App\Providers;

use Dartswoole\Help\Debug;
use Dartswoole\Rpc\RpcServerPriovder as ServerPriovder;

class RpcServerPriovder extends ServerPriovder
{
    protected $services;

    protected function provider()
    {
        $this->services = function ($consul_name) {
            $services = $this->app->make('consul-agent')->health($consul_name);
            $address = array();
            foreach ($services as $key => $value) {
                $address[] = array(
                    'host' => $value["Service"]["Address"],
                    'port' => $value["Service"]["Port"]
                );
            }
            return $address;
        };
    }

    public function boot()
    {
        parent::boot();
    }
}