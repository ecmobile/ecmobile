<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\StatsRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class StatsService extends CommonService implements ServiceInterface
{
    public function getRepository(): StatsRepository
    {
        return StatsRepository::getInstance();
    }
}
