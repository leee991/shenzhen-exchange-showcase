<?php
/**
 * 接口定义 — sz241-active/application/api/controller/Common.php
 * 仅保留控制器与方法签名。
 */



namespace app\api\controller;


use app\common\controller\Api;
use app\common\exception\UploadException;
use app\common\library\Upload;
use app\common\model\Area;
use app\common\model\Version;
use fast\Random;
use think\Config;
use think\Hook;
use think\Db;

class Common extends Api
{
    public function init()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function upload()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function iamge_upload_single($file_url)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function upload_image($file, $category)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function qrcode_s($param, $file_name , $matrixPointSize=8)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function get_auth($type = 1)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function trc_encryption($key)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function trc_decrypt($key)
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

    public function set_key()
    {
        // 内部业务实现略
        throw new \RuntimeException('not implemented');
    }

}
