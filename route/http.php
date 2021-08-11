<?php
use Dartswoole\Routes\Route;

Route::get('/',function () {
    return 'Welcome Darts Framework';
});

// Dartswoole/Route 测试
Route::get('routetest/get', 'RouteTestController@get');
Route::post('routetest/post', 'RouteTestController@post');

// rpc 服务测试
Route::get('rpctest/rpc1', 'RpcTestController@rpc1');
Route::get('rpctest/rpc2', 'RpcTestController@rpc2');

// consul 测试
Route::get('consultest/index', 'ConsulTestController@index');
Route::get('consultest/services', 'ConsulTestController@services');
Route::get('consultest/health', 'ConsulTestController@health');
Route::get('consultest/rpc', 'ConsulTestController@rpc');

// 数据库测试
Route::get('dbtest/test', 'DbTestController@test');

