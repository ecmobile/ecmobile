<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ActivityRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ActivityService extends CommonService implements ServiceInterface
{
    public function getRepository(): ActivityRepository
    {
        return ActivityRepository::getInstance();
    }
}
