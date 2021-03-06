<?php
/***************************************************************************
 *
 * Copyright (c) 2015 Lubanr.com All Rights Reserved
 *
 **************************************************************************/



/**
 * @file config.php
 * @author 吕宝贵(lbaogui@lubanr.com)
 * @date 2015/12/17 20:58:15
 * @version $Revision$
 * @brief
 *
 **/

return [
    'default_trade_type'=>'NATIVE', //默认app_id
    'apps'=>[
        'NATIVE'=>[
            'appid'=>'wx426b3015555a46be',
            'mch_id'=>'1225312702',
            'key'=>'e10adc3949ba59abbe56e057f20f883e',
            'notify_url'=>'http://travel.lubanr.com/account/wechat-pay-notify',
            'qrcode_gen_url'=>'http://paysdk.weixin.qq.com/example/qrcode.php?data=',  
        ],
        'APP'=>[
            'appid'=>'wx426b3015555a46be',
            'mch_id'=>'1225312702',
            'key'=>'e10adc3949ba59abbe56e057f20f883e',
            'notify_url'=>'http://travel.lubanr.com/account/wechat-pay-notify',
            'qrcode_gen_url'=>'http://paysdk.weixin.qq.com/example/qrcode.php?data=',  
        ],
        'JSAPI'=>[
            'appid'=>'',       //应用id
            'mch_id'=>'',       //商户id
            'key'=>'',          //私钥
            'notify_url'=>'',   //回调url
            'qrcode_gen_url'=>'',   //二维码生成地址
        ],

    ],
];

/* vim: set et ts=4 sw=4 sts=4 tw=100: */
