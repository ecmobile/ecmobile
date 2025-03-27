<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ShopPackRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ShopPackService extends CommonService implements ServiceInterface
{
    public function getRepository(): ShopPackRepository
    {
        return ShopPackRepository::getInstance();
    }
}
