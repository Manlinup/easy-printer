<?php
/**
 * Created by PhpStorm.
 * User: Manlin
 * Date: 2019/8/31
 * Time: 下午4:52
 */
namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

class ErrorCode
{
    public const CODE = [
        0 => 'success',
        1 => 'response_type非法',
        2 => 'client_id不存在',
        3 => 'redirect_uri不匹配',
        4 => 'client_id、response_type、state均不允许为空',
        5 => 'client_id或client_secret错误',
        6 => 'code错误或已过期',
        7 => '账号密码错误',
        8 => '打印机信息错误,参数有误',
        9 => '连接打印机失败,参数有误',
        10 => '权限不足',
        11 => 'sign验证失败',
        12 => '缺少必要参数',
        13 => '打印失败,参数有误',
        14 => 'access_token错误',
        15 => '权限不能大于初次授权的权限',
        16 => '不支持k1,k2,k3机型',
        17 => '该打印机已被他人绑定',
        18 => 'access_token过期或错误,请刷新access_token或者重新授权',
        19 => '应用未上架或已下架',
        20 => 'refresh_token已过期,请重新授权',
        21 => '关闭或重启失败',
        22 => '声音设置失败',
        23 => '获取机型和打印宽度失败',
        24 => '操作失败，没有订单可以被取消',
        25 => '未找到机型的硬件和软件版本',
        26 => '取消logo失败',
        27 => '请设置scope,权限默认为all',
        28 => '设置logo失败',
        29 => 'client_id,machine_code,qr_key不能为空',
        30 => 'machine_code,qr_key错误',
        31 => '接口不支持自有应用服务模式',
        32 => '订单确认设置失败',
        33 => 'Uuid不合法',
        34 => '非法操作',
        35 => 'machine_code或msign错误',
        36 => '按键打印开启或关闭失败',
        37 => '添加应用菜单失败',
        38 => '应用菜单内容错误,content必须是Json数组',
        39 => '应用菜单个数超过最大个数',
        40 => '应用菜单内容错误,content中的name值重名',
        41 => '获取或更新access_token的次数,已超过最大限制次数!',
        42 => '该机型不支持面单打印',
        43 => 'shipper_type错误',
        45 => '系统错误!请立即反馈',
        46 => 'picture_url错误或格式错误',
        47 => '参数错误',
        48 => '无法设置,该型号版本不支持!',
        49 => '',
    ];

    /**
     * @param int $errCode
     * @return string
     */
    public static function getError(int $errCode): string
    {
        if (! isset(self::CODE[$errCode])) {
            return "Unknow error ({$errCode})";
        }

        return self::CODE[$errCode];
    }
}