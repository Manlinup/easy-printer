<?php
/**
 * Created by PhpStorm.
 * User: Manlin
 * Date: 2019/8/31
 * Time: 下午11:59
 */
namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 接单拒单设置
 * Class GetOrder
 */
class GetOrder extends BaseCommand
{
    protected $url = 'https://open-api.10ss.net/printer/getorder';
    protected $response_type;

    /**
     * @return mixed
     */
    public function getResponseType ()
    {
        return $this->response_type;
    }

    /**
     * 开启:open,关闭:close
     * @param mixed $response_type
     */
    public function setResponseType ($response_type): void
    {
        $this->response_type = $response_type;
    }
}