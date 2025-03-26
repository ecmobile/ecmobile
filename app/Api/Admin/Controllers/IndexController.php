<?php

declare(strict_types=1);

namespace App\Api\Admin\Controllers;

use OpenApi\Attributes as OA;

class IndexController extends BaseController
{
    #[OA\Get(path: '/', summary: '首页', tags: ["管理平台"])]
    #[OA\Response(response: 200, description: 'OK')]
    public function index()
    {

    }
}
