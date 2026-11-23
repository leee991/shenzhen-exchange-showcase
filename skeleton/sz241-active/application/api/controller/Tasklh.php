<?php
/**
 * 接口定义 — sz241-active/application/api/controller/Tasklh.php
 * 仅保留控制器与方法签名。
 */



namespace app\api\controller;


use app\api\library\exchange\Binance;
use app\common\controller\Api;
use app\common\library\Ems;
use app\common\library\Sms;
use fast\Random;
use think\Validate;
use think\Config;
use think\Db;
use app\api\library\exchange\Huobi;
use function fast\e;

class Tasklh extends Api
{
    public function update_coin()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function open_strategy()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function start_cron()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function close_cron()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function js_allincome()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function lh_level_upd()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

}
