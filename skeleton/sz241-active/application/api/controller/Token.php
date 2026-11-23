<?php
/**
 * 接口定义 — sz241-active/application/api/controller/Token.php
 * 仅保留控制器与方法签名。
 */



namespace app\api\controller;


use app\common\controller\Api;
use fast\Random;

class Token extends Api
{
    public function check()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function refresh()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

}
