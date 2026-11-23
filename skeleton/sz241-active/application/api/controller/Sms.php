<?php
/**
 * 接口定义 — sz241-active/application/api/controller/Sms.php
 * 仅保留控制器与方法签名。
 */



namespace app\api\controller;


use app\common\controller\Api;
use app\common\library\Sms as Smslib;
use app\common\model\User;
use think\Hook;

class Sms extends Api
{
    public function send()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function check()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

}
