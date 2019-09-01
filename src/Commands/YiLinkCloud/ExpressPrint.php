<?php
/**
 * Created by PhpStorm.
 * User: Manlin
 * Date: 2019/9/1
 * Time: 上午12:55
 */
namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 打印面单
 * Class ExpressPrint
 */
class ExpressPrint extends BaseCommand
{
    protected $content;
    protected $origin_id;
    protected $url = 'https://open-api.10ss.net/expressprint/index';

    /**
     * @return string
     */
    public function getContent (): array
    {
        return $this->content;
    }

    /**
     * @link http://doc2.10ss.net/631855
     * @param array $content
     */
    public function setContent (array $content): void
    {
        $this->content = json_encode($content);
    }

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