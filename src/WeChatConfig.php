<?php

namespace BusyPHP\wechat;

use BusyPHP\App;

/**
 * 微信配置
 * @author busy^life <busy.life@qq.com>
 * @copyright (c) 2015--2021 ShanXi Han Tuo Technology Co.,Ltd. All rights reserved.
 * @version $Id: 2021/11/8 下午11:49 WeChatConfig.php $
 * @deprecated {@see WithWeChatConfig}
 */
trait WeChatConfig
{
    /**
     * 获取配置
     * @param string $name 配置名称
     * @param mixed  $default 默认值
     * @return mixed
     * @deprecated {@see WithWeChatConfig::getWeChatConfig()}
     */
    public function getWeChatConfig(string $name = '', $default = null)
    {
        return App::getInstance()->config->get('busy-wechat' . ($name ? ".{$name}" : ''), $default);
    }
}