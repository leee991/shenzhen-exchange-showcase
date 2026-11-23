<?php
/**
 * 接口定义 — sz241-active/application/common/controller/Api.php
 * 仅保留控制器与方法签名。
 */


namespace app\common\controller;


use app\common\library\Auth;
use think\Config;
use think\exception\HttpResponseException;
use think\exception\ValidateException;
use think\Hook;
use think\Lang;
use think\Loader;
use think\Request;
use think\Response;
use think\Route;
use think\Validate;

class Api
{
    public function __construct(Request $request = null)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    protected function _initialize()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    protected function loadlang($name)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    protected function success($msg = '', $data = null, $code = 1, $type = null, array $header = [])
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    protected function error($msg = '', $data = null, $code = 0, $type = null, array $header = [])
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    protected function result($msg, $data = null, $code = 0, $type = null, array $header = [])
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    protected function beforeAction($method, $options = [])
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    protected function validateFailException($fail = true)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    protected function validate($data, $validate, $message = [], $batch = false, $callback = null)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    protected function token()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

}
