<?php
namespace App\Controllers;

use Dartswoole\Database\DB;

class DbTestController
{
    public function test()
    {
        return json_encode(DB::query("select sleep(5),id,name from `user`"));
    }
}