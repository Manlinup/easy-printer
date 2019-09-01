<?php
/**
 * Created by PhpStorm.
 * User: Manlin
 * Date: 2019/9/1
 * Time: 上午12:41
 */
namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 设置内置语音
 * Class SetVoice
 */
class SetVoice extends BaseCommand
{
    protected $url = 'https://open-api.10ss.net/printer/setvoice';
    protected $content;
    protected $is_file;
    protected $aid;

    /**
     * @return mixed
     */
    public function getContent ()
    {
        return $this->content;
    }

    /**
     * 播报内容 , 音量(1~9) , 声音类型(0,1,3,4)
     * @param mixed $content
     */
    public function setContent (array $content): void
    {
        $this->content = json_encode(array_values($content));
    }

    /**
     * @return mixed
     */
    public function getisFile ()
    {
        return $this->is_file;
    }

    /**
     * true or false , 判断content是否为在线语音链接
     * @param mixed $is_file
     */
    public function setIsFile ($is_file): void
    {
        $this->is_file = $is_file;
    }

    /**
     * @return mixed
     */
    public function getAid ()
    {
        return $this->aid;
    }

    /**
     * 0~9 , 定义需设置的语音编号,若不提交,默认升序
     * @param mixed $aid
     */
    public function setAid (int $aid): void
    {
        $this->aid = $aid;
    }
}