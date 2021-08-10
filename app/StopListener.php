<?php
namespace App;

use Dartswoole\Event\Listener;
use Dartswoole\Help\Debug;
use Swoole\Coroutine;

class StopListener extends Listener
{
    // 注册的事件执行节点
    protected $name = "swoole:stop";

    public function handler($dartServer, $swooleServer)
    {
        var_dump("this is  stop --- listener handler");

        if($this->app->make('config')->get('rpc_server.flag')) {
            Coroutine::create(function (){
                $this->deregisterService();
            });
        }
    }

    /**
     * 注销 consul 服务
     */
    public function deregisterService()
    {
        // 获取 consul 服务
        $consul = $this->app->make('consul-agent');

        // 获取 consul 配置信息
        $config = $this->app->make('config')->get('consul.service');

        // 注册 consul 服务
        $consul->deregisterService($config['ID']);

        // echo
        Debug::info('注销注销注销 consul 服务');
    }
}
