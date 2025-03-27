<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ShopErrorLogRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ShopErrorLogService extends CommonService implements ServiceInterface
{
    public function getRepository(): ShopErrorLogRepository
    {
        return ShopErrorLogRepository::getInstance();
    }
}
