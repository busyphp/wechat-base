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
    use WeChatConfig;
    
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
        $this->app     = app();
        $this->request = $this->app->request;
    }
}