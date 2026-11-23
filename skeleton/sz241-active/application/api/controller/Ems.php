<?php
/**
 * 接口定义 — sz241-active/application/api/controller/Ems.php
 * 仅保留控制器与方法签名。
 */


namespace app\api\controller;


use app\common\controller\Api;
use app\common\library\Ems as Emslib;
use app\common\model\User;
use think\Db;
use think\Config;

class Ems extends Api
{
    public function _initialize()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function api_send($email,$event,$data=[])
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

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
