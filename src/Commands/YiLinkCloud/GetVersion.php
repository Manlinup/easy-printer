<?php
/**
 * Created by PhpStorm.
 * User: Manlin
 * Date: 2019/8/31
 * Time: 下午11:46
 */
namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 获取机型软硬件版本
 * Class GetVersion
 */
class GetVersion extends BaseCommand
{
    protected $url = 'https://open-api.10ss.net/printer/getversion';
}