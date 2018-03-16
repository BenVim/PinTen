<?php
/*
 * @Author: Ben 
 * @Date: 2017-08-18 15:47:00 
 * @Last Modified by: Ben
 * @Last Modified time: 2017-08-29 17:32:28
*/

namespace src\error;


class ErrorException
{

    const ERROR_GET_ROOM_DATA_FAIL            = 100; //创建房间失败

    public function getErrorPostData($error_status_code)
    {
        $postData      = array();
        $postData['t'] = 'error';
        $postData['d'] = array('c' => $error_status_code, 'm' => $this->errorMsg($error_status_code));
        return $postData;
    }

    public function getCustomData($error_code, $msg)
    {
        $postData      = array();
        $postData['t'] = 'error';
        $postData['d'] = array('c' => $error_code, 'm' => $msg);
        return $postData;
    }

    public function errorMsg($code)
    {
        $error = [ErrorException::ERROR_GET_ROOM_DATA_FAIL            => '房间不存在！'
        ];
        return $error[$code];
    }


}