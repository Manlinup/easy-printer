<?php
/**
 * Created by PhpStorm.
 * User: Manlin
 * Date: 2019/8/31
 * Time: 下午11:52
 */
namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 设置logo接口
 * Class SetIcon
 */
class SetIcon extends BaseCommand
{
    protected $url = 'https://open-api.10ss.net/printer/seticon';
    protected $img_url;

    /**
     * @return mixed
     */
    public function getImgUrl ()
    {
        return $this->img_url;
    }

    /**
     * @param mixed $img_url
     */
    public function setImgUrl ($img_url): void
    {
        $this->img_url = $img_url;
    }
}