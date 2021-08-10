<?php
return array(
    // 注册服务
    "priovders" => [

        // dartswoole 核心服务
        \Dartswoole\Event\EventServerPriovder::class,
        \Dartswoole\Consul\ConsulServerPriovder::class,

        // 自定义扩展的服务
        \App\Providers\RouteServerProvider::class,
        \App\Providers\RpcServerPriovder::class,

    ],
);