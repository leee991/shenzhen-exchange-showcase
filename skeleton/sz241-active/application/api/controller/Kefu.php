<?php
/**
 * 接口定义 — sz241-active/application/api/controller/Kefu.php
 * 仅保留控制器与方法签名。
 */



namespace app\api\controller;


use addons\kefu\library\Common;
use app\common\controller\Api;
use think\Db;
use EasyWeChat\Factory;

class Kefu extends Api
{
    public function getUnreadMessagesCount()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function getUnreadMessages()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function orderList()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function goodsList()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function acceptWxMsg()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    private function checkSignature()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

}
