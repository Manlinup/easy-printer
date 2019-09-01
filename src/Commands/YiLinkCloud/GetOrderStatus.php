<?php
/**
 * Created by PhpStorm.
 * User: Manlin
 * Date: 2019/8/31
 * Time: 下午10:52
 */
namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 获取订单状态
 * Class GetOrderStatus
 */
class GetOrderStatus extends BaseCommand
{
    protected $origin_id;
    protected $url = 'https://open-api.10ss.net/printer/getorderstatus';

    /**
     * @return mixed
     */
    public function getOriginId ()
    {
        return $this->origin_id;
    }

    /**
     * @param mixed $origin_id
     */
    public function setOriginId ($origin_id): void
    {
        $this->origin_id = $origin_id;
    }

}