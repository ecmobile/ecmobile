<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\AdAdsenseRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class AdAdsenseService extends CommonService implements ServiceInterface
{
    public function getRepository(): AdAdsenseRepository
    {
        return AdAdsenseRepository::getInstance();
    }
}
