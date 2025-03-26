<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\AdsenseRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class AdsenseService extends CommonService implements ServiceInterface
{
    public function getRepository(): AdsenseRepository
    {
        return AdsenseRepository::getInstance();
    }
}
