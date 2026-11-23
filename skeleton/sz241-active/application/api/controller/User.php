<?php
/**
 * 接口定义 — sz241-active/application/api/controller/User.php
 * 仅保留控制器与方法签名。
 */


namespace app\api\controller;


use app\common\controller\Api;
use app\common\library\Ems;
use app\common\library\Sms;
use app\common\library\TradePasswordPolicy;
use fast\Random;
use think\Validate;
use think\Config;
use think\Db;

class User extends Api
{
    protected function getJsonBody()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    protected function cleanLoginAccount($value)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    protected function cleanLoginPassword($value)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function _initialize()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function index()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function login()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function register()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function logout()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function resetpwd()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function xiugaipwd()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function check_mobile()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function create_invite_code()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

}
