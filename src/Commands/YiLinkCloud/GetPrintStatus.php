<?php
/**
 * Created by PhpStorm.
 * User: Manlin
 * Date: 2019/8/31
 * Time: 下午10:20
 */
namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 获取终端状态
 * Class GetPrintStatus
 * @package Commands\YiLinkCloud
 */
class GetPrintStatus extends BaseCommand
{
    protected $url = 'https://open-api.10ss.net/printer/getprintstatus';
}