<?php
/**
 * 接口定义 — sz241-active/application/api/controller/AiStrategy.php
 * 仅保留控制器与方法签名。
 */


namespace app\api\controller;


use app\common\controller\Api;
use think\Config;
use think\Db;

class AiStrategy extends Api
{
    protected function cfg($name, $default)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function index()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    protected function requireMutationAuth()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    protected function input($key, $default = null)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    protected function amount($raw)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    protected function rule()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    protected function wallet($userId)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    protected function writeDetail($userId, $before, $after, $amount, $type, $serial, $now)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    protected function settlementHold($order, $lock = false)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    protected function replyOrder($order)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function start()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function stop()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

}
