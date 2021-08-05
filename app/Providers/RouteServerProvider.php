<?php
namespace App\Providers;

use Dartswoole\Routes\RouteServerPriovder as ServerProvider;

class RouteServerProvider extends ServerProvider
{
    public function boot()
    {
        $this->mapRouteHttp();
        $this->mapRouteWs();

        parent::boot();
    }

    /**
     * http 路由服务
     */
    public function mapRouteHttp()
    {
        $this->map['http'] = array(
            'namespace' => 'App\Controllers',
            'path' => $this->app->getBasePath()."/route/http.php",
            'flag' => 'http'
        );
    }

    /**
     * webSocket 路由服务
     */
    public function mapRouteWs()
    {
        $this->map['ws'] = array(
            'namespace' => 'App\Controllers',
            'path' => $this->app->getBasePath()."/route/ws.php",
            'flag' => 'ws'
        );
    }
}