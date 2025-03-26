<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\OrderGoodsRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class OrderGoodsService extends CommonService implements ServiceInterface
{
    public function getRepository(): OrderGoodsRepository
    {
        return OrderGoodsRepository::getInstance();
    }
}
