<?php

namespace App\JsonRpc;

use Hyperf\RpcServer\Annotation\RpcService;
use Hyperf\Contract\ConfigInterface;

/**
 * 注意，如希望通过服务中心来管理服务，需在注解内增加 publishTo 属性
 * @RpcService(name="UserService", protocol="jsonrpc-http", server="jsonrpc-http", publishTo="consul")
 */
class UserService implements UserServiceInterface
{
    // 获取用户信息
    public function getUserInfo(int $id)
    {
        return ['id' => $id, 'name' => '黄翠刚'];
    }
}