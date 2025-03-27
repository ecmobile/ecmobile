<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\OrderDeliveryGoodsRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class OrderDeliveryGoodsService extends CommonService implements ServiceInterface
{
    public function getRepository(): OrderDeliveryGoodsRepository
    {
        return OrderDeliveryGoodsRepository::getInstance();
    }
}
