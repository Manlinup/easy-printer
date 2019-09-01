<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 文本打印
 * Class PrintText
 * @package Commands\YiLinkCloud
 */
class PrintText extends BaseCommand
{
    protected $content;
    protected $origin_id;
    protected $url = 'https://open-api.10ss.net/print/index';

    /**
     * 获取打印内容
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * 设置打印内容
     * @param mixed $content
     * @return PrintText
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * 获取内部订单号
     * @return mixed
     */
    public function getOriginId()
    {
        return $this->origin_id;
    }

    /**
     * 设置内部订单号
     * @param mixed $origin_id
     * @return PrintText
     */
    public function setOriginId($origin_id)
    {
        $this->origin_id = $origin_id;
        return $this;
    }
}