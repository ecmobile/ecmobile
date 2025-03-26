<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\AreaRegionRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class AreaRegionService extends CommonService implements ServiceInterface
{
    public function getRepository(): AreaRegionRepository
    {
        return AreaRegionRepository::getInstance();
    }
}
