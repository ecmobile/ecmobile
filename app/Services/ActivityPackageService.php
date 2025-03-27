<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ActivityPackageRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ActivityPackageService extends CommonService implements ServiceInterface
{
    public function getRepository(): ActivityPackageRepository
    {
        return ActivityPackageRepository::getInstance();
    }
}
