<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ShopPluginsRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ShopPluginsService extends CommonService implements ServiceInterface
{
    public function getRepository(): ShopPluginsRepository
    {
        return ShopPluginsRepository::getInstance();
    }
}
