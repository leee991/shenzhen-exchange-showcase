<?php
/**
 * 接口定义 — sz241-active/scripts/AutomaticCycleSettlement.php
 * 仅保留控制器与方法签名。
 */

namespace app\common\library;


class AutomaticCycleSettlement extends \app\api\controller\Cycle
{
    protected function automaticMarketPrice($symbol)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    protected function getCycleClosePrice($order)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    protected function configuredCycleClosePrice($order)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function settleConfigured(array $order)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function settleAutomatic(array $order)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

}
