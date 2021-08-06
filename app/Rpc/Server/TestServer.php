<?php
namespace App\Rpc\Server;

class TestServer
{
    public function arr() {
        return array(
            'name' => '张三'
        );
    }

    public function str() {
        return 'this is string';
    }

    public function json() {
        return json_encode(array(
            'age' => 20,
            'class' => 19
        ));
    }
}