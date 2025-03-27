<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ShopCardRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ShopCardService extends CommonService implements ServiceInterface
{
    public function getRepository(): ShopCardRepository
    {
        return ShopCardRepository::getInstance();
    }
}
