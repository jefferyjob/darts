<?php
use Dartswoole\Routes\Route;

Route::get('index',function () {
    return 'Welcome Darts';
});

// Dartswoole/Route 测试
Route::get('routetest/get', 'RouteTestController@get');
Route::post('routetest/post', 'RouteTestController@post');

// rpc 服务测试
Route::get('rpctest/rpc1', 'RpcTestController@rpc1');
Route::get('rpctest/rpc2', 'RpcTestController@rpc2');