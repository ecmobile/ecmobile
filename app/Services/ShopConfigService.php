<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ShopConfigRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ShopConfigService extends CommonService implements ServiceInterface
{
    public function getRepository(): ShopConfigRepository
    {
        return ShopConfigRepository::getInstance();
    }
}
