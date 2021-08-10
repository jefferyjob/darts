<?php
/**
 * 数据库配置
 */
return array(
    'driver' => 'mysql',

    'mysql' => array(
        'host' => '127.0.0.1',
        'port' => 3306,
        'database' => 'test',
        'username' => 'root',
        'password' => 'rootroot',
        
        // 连接池配置
        'pool' => [
            'size' => 10
        ]

    )
);