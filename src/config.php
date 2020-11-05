<?php
/**
 * 微信相关配置
 * @author busy^life <busy.life@qq.com>
 * @copyright (c) 2015--2019 ShanXi Han Tuo Technology Co.,Ltd. All rights reserved.
 * @version $Id: 2020/10/8 下午11:58 上午 config.php $
 */

return [
    
    // 公众号配置
    'public' => [
        // 公众号 App Id
        'app_id'           => '',
        
        
        // 公众号 App Secret
        'app_secret'       => '',
        
        
        // 公众号 令牌(Token)
        'token'            => '',
        
        
        // todo 暂无意义
        // 消息加解密密钥 (EncodingAESKey)
        'encoding_aes_key' => '',
        
        
        // 监听事件
        // 请参考对于类中的描述绑定自己的Event即可
        'listen'           => [
            //AuthEvent::class            => '',
            //ClickEvent::class           => '',
            //FollowEvent::class          => '',
            //LocationEvent::class        => '',
            //NamingEvent::class          => '',
            //PicEvent::class             => '',
            //RenewEvent::class           => '',
            //ScanCodeEvent::class        => '',
            //ScanEvent::class            => '',
            //TemplateMessageEvent::class => '',
            //ViewEvent::class            => '',
            //ImageMessageEvent::class    => '',
            //LinkMessageEvent::class     => '',
            //LocationMessageEvent::class => '',
            //TextMessageEvent::class     => '',
            //VideoMessageEvent::class    => '',
            //VoiceMessageEvent::class    => '',
        ],
        
        // 管理菜单分组
        'admin_module'     => 'system',
        
        // 管理菜单控制器
        'admin_control'    => 'wechat',
    ],
    
    
    // 微信小程序配置
    'mini'   => [
        // 小程序 App Id
        'app_id'     => '',
        
        // 小程序 App Secret
        'app_secret' => '',
    ],
    
    
    // 支付配置
    'pay'    => [
        
        // 微信内部JS支付
        //'js'     => [
        //    'type'          => PayType::WECHAT_JS,
        //    'app_id'        => '',
        //    'pay_key'       => '',
        //    'mch_id'        => '',
        //    'ssl_cert_path' => app()->getRootPath() . 'config/cert/wechat/apiclient_cert.pem',
        //    'ssl_key_path'  => app()->getRootPath() . 'config/cert/wechat/apiclient_key.pem',
        //    'ca_cert_path'  => app()->getRootPath() . 'config/cert/wechat/rootca.pem',
        //],
        
        
        // 微信H5支付
        // 'h5'     => [
        //     'type'          => '',
        //     'app_id'        => '',
        //     'pay_key'       => '',
        //     'mch_id'        => '',
        //     'ssl_cert_path' => app()->getRootPath() . 'config/cert/wechat/apiclient_cert.pem',
        //     'ssl_key_path'  => app()->getRootPath() . 'config/cert/wechat/apiclient_key.pem',
        //     'ca_cert_path'  => app()->getRootPath() . 'config/cert/wechat/rootca.pem',
        // ],
        
        
        // 扫码支付
        // 'native' => [
        //     'type'          => '',
        //     'app_id'        => '',
        //     'pay_key'       => '',
        //     'mch_id'        => '',
        //     'ssl_cert_path' => app()->getRootPath() . 'config/cert/wechat/apiclient_cert.pem',
        //     'ssl_key_path'  => app()->getRootPath() . 'config/cert/wechat/apiclient_key.pem',
        //     'ca_cert_path'  => app()->getRootPath() . 'config/cert/wechat/rootca.pem',
        // ],
        
        
        // APP端支付
        //'app'    => [
        //    'type'          => PayType::WECHAT_APP,
        //    'app_id'        => '',
        //    'pay_key'       => '',
        //    'mch_id'        => '',
        //    'ssl_cert_path' => app()->getRootPath() . 'config/cert/wechat/apiclient_cert.p12',
        //    'ssl_key_path'  => app()->getRootPath() . 'config/cert/wechat/apiclient_key.pem',
        //    'ca_cert_path'  => app()->getRootPath() . 'config/cert/wechat/rootca.pem',
        //]
    ]
];