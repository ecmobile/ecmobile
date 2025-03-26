<?php

declare(strict_types=1);

namespace App\Api\Shop\Controllers;

use App\Http\Controllers\Controller;
use App\Constants\Constant;
use OpenApi\Attributes as OA;
use OpenApi\Attributes\Contact;

#[OA\Info(version: Constant::Version, description: Constant::Release, title: '商城API文档', contact: new Contact('API Develop Team'))]
#[OA\Server(url: 'http://127.0.0.1:8000/api/shop/', description: '开发环境')]
#[OA\SecurityScheme(securityScheme: 'bearerAuth', type: 'http', description: 'JWT 认证信息', name: 'Authorization', in: 'header', bearerFormat: 'JWT', scheme: 'bearer')]
class BaseController extends Controller
{

}
