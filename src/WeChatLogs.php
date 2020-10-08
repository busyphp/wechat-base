<?php

namespace BusyPHP\wechat;

use think\facade\Log;

/**
 * 微信公众号日志类
 * @author busy^life <busy.life@qq.com>
 * @copyright (c) 2015--2019 ShanXi Han Tuo Technology Co.,Ltd. All rights reserved.
 * @version $Id: 2020/7/8 下午11:27 上午 WeChatLogs.php $
 */
class WeChatLogs
{
    /**
     * 记录普通日志信息
     * @param $message
     */
    public static function addInfo($message)
    {
        Log::record($message, 'info');
    }
    
    
    /**
     * 记录错误日志信息
     * @param $message
     */
    public static function addError($message)
    {
        Log::record($message, 'error');
    }
}