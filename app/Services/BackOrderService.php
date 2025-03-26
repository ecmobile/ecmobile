<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\BackOrderRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class BackOrderService extends CommonService implements ServiceInterface
{
    public function getRepository(): BackOrderRepository
    {
        return BackOrderRepository::getInstance();
    }
}
