<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ShippingAreaRegionRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ShippingAreaRegionService extends CommonService implements ServiceInterface
{
    public function getRepository(): ShippingAreaRegionRepository
    {
        return ShippingAreaRegionRepository::getInstance();
    }
}
