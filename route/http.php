<?php
use Dartswoole\Routes\Route;

Route::get('index',function () {
    return 'Welcome Darts';
});

// Dartswoole/Route 测试
Route::get('routetest/get', 'RouteTestController@get');
Route::post('routetest/post', 'RouteTestController@post');