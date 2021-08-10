<?php
namespace App\Rpc\Client;

use Dartswoole\Rpc\RpcClient;

class TestClient extends RpcClient
{
    protected $class = \App\Rpc\Server\TestServer::class;

    protected $service = 'darts_server';
}