<?php

namespace App\JsonRpc;

use Hyperf\RpcServer\Annotation\RpcService;

interface UserServiceInterface
{
    public function getUserInfo(int $id);
}
