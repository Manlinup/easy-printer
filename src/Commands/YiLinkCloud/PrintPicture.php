<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 打印图片
 * Class PrintPicture
 * @package EasySwoole\EasyPrinter\Commands\YiLinkCloud
 */
class PrintPicture extends BaseCommand
{
    protected $picture_url;
    protected $origin_id;
    protected $url = 'https://open-api.10ss.net/pictureprint/index';

    /**
     * @return mixed
     */
    public function getPictureUrl()
    {
        return $this->picture_url;
    }

    /**
     * @param mixed $picture_url
     */
    public function setPictureUrl($picture_url)
    {
        $this->picture_url = $picture_url;
    }

    /**
     * @return mixed
     */
    public function getOriginId()
    {
        return $this->origin_id;
    }

    /**
     * @param mixed $origin_id
     */
    public function setOriginId($origin_id)
    {
        $this->origin_id = $origin_id;
    }
}