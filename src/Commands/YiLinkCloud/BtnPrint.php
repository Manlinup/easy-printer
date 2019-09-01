<?php
/**
 * Created by PhpStorm.
 * User: Manlin
 * Date: 2019/8/31
 * Time: 下午11:56
 */
namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 打印方式
 * Class BtnPrint
 */
class BtnPrint extends BaseCommand
{
    protected $url = 'https://open-api.10ss.net/printer/btnprint';
    protected $response_type;

    /**
     * @return mixed
     */
    public function getResponseType ()
    {
        return $this->response_type;
    }

    /**
     * 开启:btnopen,关闭:btnclose; 按键打印
     * @param mixed $response_type
     */
    public function setResponseType ($response_type): void
    {
        $this->response_type = $response_type;
    }
}