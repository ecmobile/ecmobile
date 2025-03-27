<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\GoodsTypeAttributeRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class GoodsTypeAttributeService extends CommonService implements ServiceInterface
{
    public function getRepository(): GoodsTypeAttributeRepository
    {
        return GoodsTypeAttributeRepository::getInstance();
    }
}
