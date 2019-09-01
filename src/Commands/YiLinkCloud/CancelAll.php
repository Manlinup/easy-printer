<?php
/**
 * Created by PhpStorm.
 * User: Manlin
 * Date: 2019/8/31
 * Time: 下午11:48
 */
namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 取消所有未打印订单
 * Class CancelAll
 */
class CancelAll extends BaseCommand
{
    protected $url = 'https://open-api.10ss.net/printer/cancelall';
}