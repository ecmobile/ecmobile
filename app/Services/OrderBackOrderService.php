<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\OrderBackOrderRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class OrderBackOrderService extends CommonService implements ServiceInterface
{
    public function getRepository(): OrderBackOrderRepository
    {
        return OrderBackOrderRepository::getInstance();
    }
}
