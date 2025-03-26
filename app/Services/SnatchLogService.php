<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\SnatchLogRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class SnatchLogService extends CommonService implements ServiceInterface
{
    public function getRepository(): SnatchLogRepository
    {
        return SnatchLogRepository::getInstance();
    }
}
