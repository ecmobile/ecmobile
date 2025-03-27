<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\OrderBackGoodsRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class OrderBackGoodsService extends CommonService implements ServiceInterface
{
    public function getRepository(): OrderBackGoodsRepository
    {
        return OrderBackGoodsRepository::getInstance();
    }
}
