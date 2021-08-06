<?php
/**
{
    "jsonrpc": "2.0",
    "method": "{version}::{class_name}::{method_name}",
    "params": [],
    "id": "",
    "ext": []
}
 */

$client = new Swoole\Client(SWOOLE_SOCK_TCP);
if (!$client->connect('127.0.0.1', 8500, 0.5))
{
    echo "connect failed. Error: {$client->errCode}\n";
}
$client->send(json_encode(array(
    'method' => '\App\Rpc\Server\TestServer::json',
    'params' => array()
)));
echo $client->recv();
$client->close();
