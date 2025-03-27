<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\GoodsVolumePriceRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class GoodsVolumePriceService extends CommonService implements ServiceInterface
{
    public function getRepository(): GoodsVolumePriceRepository
    {
        return GoodsVolumePriceRepository::getInstance();
    }
}
