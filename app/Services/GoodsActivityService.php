<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\GoodsActivityRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class GoodsActivityService extends CommonService implements ServiceInterface
{
    public function getRepository(): GoodsActivityRepository
    {
        return GoodsActivityRepository::getInstance();
    }
}
