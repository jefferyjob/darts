<?php
return array(
    /*
    |--------------------------------------------------------------------------
    | 服务注册
    |--------------------------------------------------------------------------
    |
    | 此处列出的服务将会被自动加载
    | 你也可以将你自己框架的服务加入到这里完成自动加载
    | 也可在此处用于扩展服务
    |
    */
    "priovders" => [

        /**
         * dartswoole 类库中的核心服务
         */
        // 事件服务
        Dartswoole\Event\EventServerPriovder::class,
        // 数据库服务
        Dartswoole\Database\DatabaseServerPriovder::class,
        // consul微服务治理服务
        // Dartswoole\Consul\ConsulServerPriovder::class,

        /**
         * dartswoole 类库中的某些服务的扩展重写
         */
        // 路由服务
        App\Providers\RouteServerProvider::class,
        // RPC实现服务
        App\Providers\RpcServerPriovder::class,

    ],
);