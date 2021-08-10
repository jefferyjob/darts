<?php
/**
 * consul 配置文件
 */
return array(

    /**
     * consul 应用信息
     */
    'app' => array(
        'host' => '127.0.0.1',
        'port' => 8500,
    ),

    /**
     * consul 服务信息
     */
    'service' => array(
        // 服务id
        'ID'                => "darts_server_1",
        // 服务名称
        'Name'              => "darts_server",
        'Tags'              => [
            'rpc-server'
        ],
        // 服务ip
        'Address'           => "127.0.0.1",
        // 服务端口
        'Port'              => 9600,

        // 健康检查
        // "Check" => [
        //     "name"     => "swoft.goods.server",
        //     // 192.168.169.200 这是服务宿主机地址
        //     "tcp"      => "192.168.169.200:".env("CONSUL_CHECK_PORT"),
        //     "interval" => '10s',
        //     "timeout"  => '2s'
        // ],
    )

);