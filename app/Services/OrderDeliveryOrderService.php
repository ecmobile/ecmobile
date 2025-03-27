<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\OrderDeliveryOrderRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class OrderDeliveryOrderService extends CommonService implements ServiceInterface
{
    public function getRepository(): OrderDeliveryOrderRepository
    {
        return OrderDeliveryOrderRepository::getInstance();
    }
}
