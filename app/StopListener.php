<?php
namespace App;

use Dartswoole\Event\Listener;

class StopListener extends Listener
{
    // 注册的事件执行节点
    protected $name = "swoole:stop";

    public function handler($dartServer, $swooleServer)
    {
        var_dump("this is  stop --- listener handler");
    }
}
