<?php

namespace BusyPHP\wechat;

use BusyPHP\App;

/**
 * WithWeChatConfig
 * @author busy^life <busy.life@qq.com>
 * @copyright (c) 2015--2022 ShanXi Han Tuo Technology Co.,Ltd. All rights reserved.
 * @version $Id: 2022/2/20 3:21 PM WithWeChatConfig.php $
 * @property App $app
 */
class WithWeChatConfig
{
    /**
     * 获取配置
     * @param string $name 配置名称
     * @param mixed  $default 默认值
     * @return mixed
     */
    public function getWeChatConfig(string $name = '', $default = null)
    {
        return ($this->app ?? App::getInstance())->config->get('busy-wechat' . ($name ? ".{$name}" : ''), $default);
    }
}