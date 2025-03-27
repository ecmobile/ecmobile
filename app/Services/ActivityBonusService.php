<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ActivityBonusRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ActivityBonusService extends CommonService implements ServiceInterface
{
    public function getRepository(): ActivityBonusRepository
    {
        return ActivityBonusRepository::getInstance();
    }
}
