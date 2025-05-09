<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\OrderPayRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class OrderPayService extends CommonService implements ServiceInterface
{
    public function getRepository(): OrderPayRepository
    {
        return OrderPayRepository::getInstance();
    }
}
