<?php
/**
 * Created by PhpStorm.
 * User: Manlin
 * Date: 2019/8/31
 * Time: 下午11:50
 */
namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 取消单条未打印订单
 * Class CancelOne
 */
class CancelOne extends BaseCommand
{
    protected $url = 'https://open-api.10ss.net/printer/cancelone';
    protected $order_id;

    /**
     * @return mixed
     */
    public function getOrderId ()
    {
        return $this->order_id;
    }

    /**
     * @param mixed $order_id
     */
    public function setOrderId ($order_id): void
    {
        $this->order_id = $order_id;
    }
}