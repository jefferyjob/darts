<?php
namespace App\Listeners;

use Dartswoole\Event\Listener;
use Dartswoole\Help\Debug;
use Swoole\Coroutine;

class StartListener extends Listener
{
    // 注册的事件执行节点
    protected $name = "swoole:start";

    public function handler($dartServer, $swooleServer)
    {

        // var_dump("this is  START --- listener handler============");

        if($this->app->make('config')->get('rpc_server.flag')) {
            Coroutine::create(function (){
                $this->registerConsul();
            });
        }
    }

    /**
     * 注册 consul 服务
     */
    public function registerConsul()
    {
        // 获取 consul 服务
        $consul = $this->app->make('consul-agent');

        // 获取 consul 配置信息
        $config = $this->app->make('config')->get('consul.service');

        // 注册 consul 服务
        $consul->registerService($config);

        // echo
        Debug::info('注册 consul 服务 ===== Success');
    }
}
