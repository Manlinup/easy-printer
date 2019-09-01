<?php
/**
 * Created by PhpStorm.
 * User: Manlin
 * Date: 2019/8/31
 * Time: 下午10:59
 */
namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 添加应用菜单
 * Class AddPrintMenu
 */
class AddPrintMenu extends BaseCommand
{
    protected $content;
    protected $url = 'https://open-api.10ss.net/printmenu/addprintmenu';

    /**
     * @return string
     */
    public function getContent (): array
    {
        return $this->content;
    }

    /**
     * @param array $content
     */
    public function setContent (array $content): void
    {
        $this->content = json_encode($content);
    }
}