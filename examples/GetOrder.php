<?php
/**
 * Created by PhpStorm.
 * User: Manlin
 * Date: 2019/9/1
 * Time: 上午12:00
 */
use EasySwoole\EasyPrinter\Commands\YiLinkCloud\GetOrder;
use EasySwoole\EasyPrinter\EasyPrinter;

require_once 'vendor/autoload.php';

go(function () {

    $clientId = '您的易联云应用ID';
    $clientSecret = '您的易联云应用秘钥';
    $driver = EasyPrinter::yiLinkCloud($clientId, $clientSecret);

    // 新建一条命令
    $PrintCommand = new GetOrder();
    $PrintCommand->setMachineCode('打印机编号');
    $PrintCommand->setResponseType('open');

    try {
        $response = $driver->sendCommand($PrintCommand);
        var_dump($response);
    } catch (Throwable $throwable) {
        var_dump($throwable->getMessage());
    }

});