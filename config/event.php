<?php
/**
 * 此处演示事件的两种配置方式
 *
 * listeners
 * 扫描该配置目录下的所有问题进行加载后注册
 *
 * events
 * 更具里面配置的类进行注册
 */
return [
    "listeners" => [
        [
            "path" => "/app/Listeners",
            "namespace" => "App\\Listeners\\"
        ],
    ],
    "events" => [
        \App\StopListener::class,
    ]
];
