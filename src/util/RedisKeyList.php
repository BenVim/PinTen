<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 08/09/2017
 * Time: 10:34
 */

namespace src\util;


class RedisKeyList
{
    const REDIS_KEY_PLIST                  = "NN:{HOUSE_ID}:{ROUND}:PLIST:"; //用户的发到手上的牌信息
    const REDIS_KEY_USER_FD                = "NN:USER:{UID}:FD:";
    const REDIS_KEY_GAME_STATE             = "NN:{HOUSE_ID}:GAME:STATE:";
    const REDIS_KEY_TICK_KEY               = "NN:{HOUSE_ID}:TICK:KEY:";
    const REDIS_KEY_BANKER_UID_KEY         = "NN:BANKER:UID:{HOUSE_ID}:{ROUND}";//记录回合庄
    const REDIS_KEY_USER_OPERATE_LOCK      = "NN:USER:OPERATE:LOCK:{UID}:";//用户操作锁，2秒
    const REDIS_KEY_LOGIN_CLIENT_INFO      = "NN:LOGIN:{CLIENT_ID}:";//用户登录记录用户的数据。
    const REDIS_KEY_ONLINE                 = "NN:ONLINE:";//记录在线的用户fd
    const REDIS_KEY_UNION_LIST             = "NN:UNION:LIST:{UNION_ID}:";//记录当前公会在线人员列表 只记fd


    public function getRedisKey(...$args)
    {
        $len = count($args);
        if ($len == 0) {
            return "";
        }

        $keyTemplate = $args[0];
        if ($len == 1)
            return $keyTemplate;

        preg_match_all("/{[A-Z_]+}/", $keyTemplate, $matches, PREG_PATTERN_ORDER);

        if (count($matches[0]) == count($args) - 1) {
            foreach ($matches[0] as $key => $match) {
                $keyTemplate = str_replace($match, $args[$key + 1], $keyTemplate);
            }
        } else {
            echo "args num is error";
            return "";
        }
        return $keyTemplate;
    }

}