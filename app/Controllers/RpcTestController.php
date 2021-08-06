<?php
namespace App\Controllers;

use App\Rpc\Client\TestClient;

class RpcTestController
{
    public function rpc1()
    {
        return (new TestClient())->json();
    }

    public function rpc2()
    {
        return (new TestClient())->str();
    }
}