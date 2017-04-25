<?php

namespace Hanson\Vbot\Example;

class Observer
{
    public static function setQrCodeObserver($qrCodeUrl)
    {
        echo $qrCodeUrl;
    }

    public static function setLoginSuccessObserver()
    {
        echo '登录成功'.PHP_EOL;
    }

    public static function setReLoginSuccessObserver()
    {
        echo '免扫码登录成功'.PHP_EOL;
    }

    public static function setExitObserver()
    {
        echo '退出程序'.PHP_EOL;
    }
}