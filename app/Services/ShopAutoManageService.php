<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ShopAutoManageRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ShopAutoManageService extends CommonService implements ServiceInterface
{
    public function getRepository(): ShopAutoManageRepository
    {
        return ShopAutoManageRepository::getInstance();
    }
}
