<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ShopAgencyRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ShopAgencyService extends CommonService implements ServiceInterface
{
    public function getRepository(): ShopAgencyRepository
    {
        return ShopAgencyRepository::getInstance();
    }
}
