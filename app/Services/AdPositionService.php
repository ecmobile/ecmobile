<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\AdPositionRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class AdPositionService extends CommonService implements ServiceInterface
{
    public function getRepository(): AdPositionRepository
    {
        return AdPositionRepository::getInstance();
    }
}
