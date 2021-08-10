<?php
/**
 * 配置 rpc 服务端的相关配置
 */
return array(

    // 是否开放rpc服务
    'flag' => false,

    // 服务类型定义
    'type' => SWOOLE_SOCK_TCP,

    // ip定义
    'host' => '127.0.0.1',

    // 端口定义
    'port' => 9600,

    // swoole 相关配置
    'swoole' => [

    ]
);