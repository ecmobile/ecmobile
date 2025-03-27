<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ActivitySnatchRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ActivitySnatchService extends CommonService implements ServiceInterface
{
    public function getRepository(): ActivitySnatchRepository
    {
        return ActivitySnatchRepository::getInstance();
    }
}
