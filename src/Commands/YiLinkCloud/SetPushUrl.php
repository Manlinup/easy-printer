<?php
/**
 * Created by PhpStorm.
 * User: Manlin
 * Date: 2019/9/1
 * Time: 上午12:01
 */
namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 设置推送url
 * Class SetPushUrl
 */
class SetPushUrl extends BaseCommand
{
    protected $url = 'https://open-api.10ss.net/oauth/setpushurl';
    protected $cmd;
    protected $pushUrl;
    protected $status;

    /**
     * @return mixed
     */
    public function getPushUrl ()
    {
        return $this->pushUrl;
    }

    /**
     * 推送地址填写必须以http://或https://开头的地址。
     * 推送地址需要支持GET访问，当GET请求访问时，请直接返回{"data":"OK"}，
     * 用于推送地址的可用性测试
     * @param mixed $pushUrl
     */
    public function setPushUrl ($pushUrl): void
    {
        $this->pushUrl = $pushUrl;
    }

    /**
     * @return mixed
     */
    public function getCmd ()
    {
        return $this->cmd;
    }

    /**
     * 打印完成标识oauth_finish
     * 接单拒单标识oauth_getOrder
     * 终端状态标识oauth_printStatus
     * 按键请求标识oauth_request
     * @param mixed $cmd
     */
    public function setCmd ($cmd): void
    {
        $this->cmd = $cmd;
    }

    /**
     * @return mixed
     */
    public function getStatus ()
    {
        return $this->status;
    }

    /**
     * 开启open
     * 关闭close
     * @param mixed $status
     */
    public function setStatus ($status): void
    {
        $this->status = $status;
    }
}