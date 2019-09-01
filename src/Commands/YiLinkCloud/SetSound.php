<?php
/**
 * Created by PhpStorm.
 * User: Manlin
 * Date: 2019/8/31
 * Time: 下午11:23
 */
namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 声音调节
 * Class SetSound
 */
class SetSound extends BaseCommand
{
    protected $response_type;
    protected $voice;
    protected $url = 'https://open-api.10ss.net/printer/setsound';

    /**
     * @return mixed
     */
    public function getResponseType ()
    {
        return $this->response_type;
    }

    /**
     * 蜂鸣器:buzzer,喇叭:horn
     * @param mixed $response_type
     */
    public function setResponseType ($response_type): void
    {
        $this->response_type = $response_type;
    }

    /**
     * @return mixed
     */
    public function getVoice ()
    {
        return $this->voice;
    }

    /**
     * [0,1,2,3] 4种音量设置
     * @param mixed $voice
     */
    public function setVoice ($voice): void
    {
        $this->voice = $voice;
    }

}