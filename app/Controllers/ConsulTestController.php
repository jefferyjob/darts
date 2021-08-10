<?php
namespace App\Controllers;

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
        $result =  app('consul-agent')->health('consul');
        return json_encode($result);
    }

    public function rpc()
    {

    }
}