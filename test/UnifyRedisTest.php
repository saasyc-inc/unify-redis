<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 7/22/19
 * Time: 3:48 PM
 */

namespace UnifyRedisTest;

use UnifyRedis\UnifyRedis;

class UnifyRedisTest
{

    /**
     * @test
     */
    public function correct_case()
    {

        $key = "test:prefix";

        $i = 0;
        array_map(function ($val) use (&$i, $key) {
            ++$i;

            UnifyRedis::zadd($key, $val, $i);
        }, [
            11,
            211,
            34,
            141,
            35,
            26,
            7,
        ]);

//        $num = 3;
//
//        CustomRedis::zset_remove_highests($key, $num);
//
        dd(
            UnifyRedis::zrange($key, 3, 100)
        );

    }
}