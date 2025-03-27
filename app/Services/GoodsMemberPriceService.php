<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\GoodsMemberPriceRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class GoodsMemberPriceService extends CommonService implements ServiceInterface
{
    public function getRepository(): GoodsMemberPriceRepository
    {
        return GoodsMemberPriceRepository::getInstance();
    }
}
