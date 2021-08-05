<?php
namespace App\Listeners;

use Dartswoole\Event\Listener;

class StartListener extends Listener
{
    // 注册的事件执行节点
    protected $name = "swoole:start";

    public function handler($dartServer, $swooleServer)
    {
        var_dump("this is  START --- listener handler============");
    }
}
