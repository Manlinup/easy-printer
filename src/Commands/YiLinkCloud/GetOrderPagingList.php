<?php
/**
 * Created by PhpStorm.
 * User: Manlin
 * Date: 2019/8/31
 * Time: 下午10:28
 */
namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 获取订单列表
 * Class GetOrderPagingList
 * @package Commands\YiLinkCloud
 */
class GetOrderPagingList extends BaseCommand
{
    protected $page_index;
    protected $page_size;
    protected $url = 'https://open-api.10ss.net/printer/getorderpaginglist';

    /**
     * @return mixed
     */
    public function getPageIndex ()
    {
        return $this->page_index;
    }

    /**
     * @param mixed $page_index
     */
    public function setPageIndex ($page_index): void
    {
        $this->page_index = $page_index;
    }

    /**
     * @return mixed
     */
    public function getPageSize ()
    {
        return $this->page_size;
    }

    /**
     * @param mixed $page_size
     */
    public function setPageSize ($page_size): void
    {
        $this->page_size = $page_size;
    }
}