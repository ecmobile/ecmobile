<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ShopNavRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ShopNavService extends CommonService implements ServiceInterface
{
    public function getRepository(): ShopNavRepository
    {
        return ShopNavRepository::getInstance();
    }
}
