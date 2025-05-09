<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\GoodsProductRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class GoodsProductService extends CommonService implements ServiceInterface
{
    public function getRepository(): GoodsProductRepository
    {
        return GoodsProductRepository::getInstance();
    }
}
