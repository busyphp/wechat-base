<?php

namespace BusyPHP\wechat;


use BusyPHP\App;
use BusyPHP\Request;

/**
 * 微信公众号基本类
 * @author busy^life <busy.life@qq.com>
 * @copyright 2015 - 2018 busy^life <busy.life@qq.com>
 * @version $Id: 2018-05-13 下午6:14 WeChat.php busy^life $
 */
abstract class WeChat
{
    /**
     * @var App
     */
    protected $app;
    
    /**
     * @var Request
     */
    protected $request;
    
    
    public function __construct()
    {
        $this->app = app();
        $this->app->config->load($this->app->getRootPath() . 'config' . DIRECTORY_SEPARATOR . 'extend' . DIRECTORY_SEPARATOR . 'wechat.php', 'wechat');
        $this->request = $this->app->request;
    }
    
    
    /**
     * 获取配置
     * @param string $name 配置名称
     * @param mixed  $default 默认值
     * @return mixed
     * @deprecated 该方法已不建议试用，参考新方法 {@see WeChatConfig::getConfig()}
     */
    public function getConfig(string $name, $default = null)
    {
        return $this->app->config->get('wechat.' . $name, $default);
    }
}