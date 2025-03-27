<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\GoodsBrandRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class GoodsBrandService extends CommonService implements ServiceInterface
{
    public function getRepository(): GoodsBrandRepository
    {
        return GoodsBrandRepository::getInstance();
    }
}
