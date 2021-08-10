<?php
namespace App\Controllers;

use App\Rpc\Client\TestClient;

class ConsulTestController
{
    public function index()
    {
        return json_encode(array(
            'consultest/services',
            'consultest/health?name=consul'
        ));
    }

    public function services()
    {
        $result =  app('consul-agent')->services();
        return json_encode($result);
    }

    public function health()
    {
        $result =  app('consul-agent')->health('darts_server');
        return json_encode($result);
    }

    public function rpc()
    {
        return (new TestClient())->json();
    }
}