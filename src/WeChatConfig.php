<?php

namespace BusyPHP\wechat;

use BusyPHP\App;

/**
 * 微信配置
 * @author busy^life <busy.life@qq.com>
 * @copyright (c) 2015--2019 ShanXi Han Tuo Technology Co.,Ltd. All rights reserved.
 * @version $Id: 2020/11/5 下午7:22 下午 WeChatConfig.php $
 * @property App $app;
 */
trait WeChatConfig
{
    private $isLoadConfig = false;
    
    
    /**
     * 获取配置
     * @param string $name 配置名称
     * @param mixed  $default 默认值
     * @return mixed
     */
    public function getConfig(string $name, $default = null)
    {
        if (!$this->isLoadConfig) {
            $this->app->config->load($this->app->getRootPath() . 'config' . DIRECTORY_SEPARATOR . 'extend' . DIRECTORY_SEPARATOR . 'wechat.php', 'wechat');
            
            $this->isLoadConfig = true;
        }
        
        return $this->app->config->get('wechat.' . $name, $default);
    }
}