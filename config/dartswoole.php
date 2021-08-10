<?php
return array(
    // 注册服务
    "priovders" => [

        \App\Providers\RouteServerProvider::class,
        \App\Providers\RpcServerPriovder::class,

        \Dartswoole\Event\EventServerPriovder::class,
        \Dartswoole\Consul\ConsulServerPriovder::class,
        \Dartswoole\Rpc\RpcServerPriovder::class,
    ],
);