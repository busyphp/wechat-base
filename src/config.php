<?php
/**
 * 微信相关配置
 * @author busy^life <busy.life@qq.com>
 * @copyright (c) 2015--2021 ShanXi Han Tuo Technology Co.,Ltd. All rights reserved.
 * @version $Id: 2021/11/8 下午11:50 config.php $
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
        ]
    ],
    
    
    // 微信小程序配置
    'mini'   => [
        // 小程序名称
        'name'           => '',
        
        // 小程序 App Id
        'app_id'         => '',
        
        // 小程序 App Secret
        'app_secret'     => '',

        // 小程序 令牌(Token)
        'token'          => '',

        // todo 暂无意义
        // 消息加解密密钥 (EncodingAESKey)
        'encodingAESKey' => '',
        
        // 多小程序配置
        'multi'          => [
            '小程序标识' => [
                'name'           => '',
                'app_id'         => '',
                'app_secret'     => '',
                'token'          => '',
                'encodingAESKey' => '',
            ],
        ],
        
        // 请参考对于类中的描述绑定自己的Event即可
        'listen'         => [
            // UserEnterTempSessionEvent::class => '',
            // MiniProgramPageEvent::class      => '',
            // TextEvent::class                 => '',
            // ImageEvent::class                => '',
        ]
    ],
    
    
    // 支付配置
    'pay'    => [
        
        // 微信内部JS支付
        //'js'     => [
        //    'type'          => '',
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
        //    'type'          => '',
        //    'app_id'        => '',
        //    'pay_key'       => '',
        //    'mch_id'        => '',
        //    'ssl_cert_path' => app()->getRootPath() . 'config/cert/wechat/apiclient_cert.p12',
        //    'ssl_key_path'  => app()->getRootPath() . 'config/cert/wechat/apiclient_key.pem',
        //    'ca_cert_path'  => app()->getRootPath() . 'config/cert/wechat/rootca.pem',
        //]
        
        
        // 小程序端支付
        //'mini'    => [
        //    'type'          => '',
        //    'app_id'        => '',
        //    'pay_key'       => '',
        //    'mch_id'        => '',
        //    'ssl_cert_path' => app()->getRootPath() . 'config/cert/wechat/apiclient_cert.p12',
        //    'ssl_key_path'  => app()->getRootPath() . 'config/cert/wechat/apiclient_key.pem',
        //    'ca_cert_path'  => app()->getRootPath() . 'config/cert/wechat/rootca.pem',
        //]
    ]
];