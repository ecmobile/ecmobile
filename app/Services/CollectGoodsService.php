<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\CollectGoodsRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class CollectGoodsService extends CommonService implements ServiceInterface
{
    public function getRepository(): CollectGoodsRepository
    {
        return CollectGoodsRepository::getInstance();
    }
}
