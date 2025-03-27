<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ShopRegionRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ShopRegionService extends CommonService implements ServiceInterface
{
    public function getRepository(): ShopRegionRepository
    {
        return ShopRegionRepository::getInstance();
    }
}
