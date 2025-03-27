<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ActivityGroupRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ActivityGroupService extends CommonService implements ServiceInterface
{
    public function getRepository(): ActivityGroupRepository
    {
        return ActivityGroupRepository::getInstance();
    }
}
