<?php
return array(

    'http' => array(

        'host' => '0.0.0.0',

        'port' => 9500,

    ),

    'rpc' => array(

        'flag' => true,

        'type' => SWOOLE_SOCK_TCP,

        'host' => '127.0.0.1',

        'port' => 8500,

        'swoole' => [

        ]
    ),
);