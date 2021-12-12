<?php

namespace BusyPHP\wechat;

use BusyPHP\App;

/**
 * 微信配置
 * @author busy^life <busy.life@qq.com>
 * @copyright (c) 2015--2021 ShanXi Han Tuo Technology Co.,Ltd. All rights reserved.
 * @version $Id: 2021/11/8 下午11:49 WeChatConfig.php $
 */
trait WeChatConfig
{
    private static $isLoadConfig = false;
    
    
    /**
     * 获取配置
     * @param string $name 配置名称
     * @param mixed  $default 默认值
     * @return mixed
     */
    public function getConfig(string $name, $default = null)
    {
        $app = App::getInstance();
        if (!self::$isLoadConfig) {
            $app->config->load($app->getRootPath() . 'config' . DIRECTORY_SEPARATOR . 'extend' . DIRECTORY_SEPARATOR . 'wechat.php', 'wechat');
            
            self::$isLoadConfig = true;
        }
        
        return $app->config->get('wechat.' . $name, $default);
    }
}