<?php
/**
 * Created by PhpStorm.
 * User: Manlin
 * Date: 2019/9/1
 * Time: 上午12:37
 */
namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 删除内置语音
 * Class DeleteVoice
 */
class DeleteVoice extends BaseCommand
{
    protected $url = 'https://open-api.10ss.net/printer/deletevoice';
    protected $aid;

    /**
     * @return mixed
     */
    public function getAid ()
    {
        return $this->aid;
    }

    /**
     * 0~9 , 定义需删除的语音编号
     * @param mixed $aid
     */
    public function setAid ($aid): void
    {
        $this->aid = $aid;
    }
}