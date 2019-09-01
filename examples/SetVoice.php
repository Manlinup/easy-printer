<?php
/**
 * Created by PhpStorm.
 * User: Manlin
 * Date: 2019/9/1
 * Time: 上午12:42
 */
use EasySwoole\EasyPrinter\Commands\YiLinkCloud\SetVoice;
use EasySwoole\EasyPrinter\EasyPrinter;

require_once 'vendor/autoload.php';

go(function () {

    $clientId = '您的易联云应用ID';
    $clientSecret = '您的易联云应用秘钥';
    $driver = EasyPrinter::yiLinkCloud($clientId, $clientSecret);

    // 新建一条命令
    $PrintCommand = new SetVoice();
    $PrintCommand->setMachineCode('打印机编号');
    $PrintCommand->setContent([
        '测试', 1, 1
    ]);
    $PrintCommand->setAid(1);
    $PrintCommand->setIsFile(false);
    try {
        $response = $driver->sendCommand($PrintCommand);
        var_dump($response);
    } catch (Throwable $throwable) {
        var_dump($throwable->getMessage());
    }

});