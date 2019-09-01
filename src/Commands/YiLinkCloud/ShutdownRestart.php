<?php
/**
 * Created by PhpStorm.
 * User: Manlin
 * Date: 2019/8/31
 * Time: 下午11:15
 */
namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 关机重启
 * Class ShutdownRestart
 */
class ShutdownRestart extends BaseCommand
{
    protected $origin_id;
    protected $response_type;
    protected $url = 'https://open-api.10ss.net/printer/shutdownrestart';

    /**
     * @return mixed
     */
    public function getResponseType ()
    {
        return $this->response_type;
    }

    /**
     * 重启:restart,关闭:shutdown
     * @param mixed $response_type
     */
    public function setResponseType ($response_type): void
    {
        $this->response_type = $response_type;
    }
}