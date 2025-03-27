<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ShopStatsRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ShopStatsService extends CommonService implements ServiceInterface
{
    public function getRepository(): ShopStatsRepository
    {
        return ShopStatsRepository::getInstance();
    }
}
