<?php
/**
 * 配置 rpc 服务端的相关配置
 */
return array(

    /**
     * Http 服务相关配置
     */
    'http' => array(

        // 访问ip
        'host' => '0.0.0.0',

        // 访问端口
        'port' => 9500,

    ),

    /**
     * RPC 服务相关配置
     */
    'rpc' => array(

        // 是否开放rpc服务
        'flag' => true,

        // 服务类型定义
        'type' => SWOOLE_SOCK_TCP,

        // ip定义
        'host' => '127.0.0.1',

        // 端口定义
        'port' => 8500,

        // swoole 相关配置
        'swoole' => [

        ]
    ),
);