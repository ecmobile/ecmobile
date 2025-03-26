<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ErrorLogRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ErrorLogService extends CommonService implements ServiceInterface
{
    public function getRepository(): ErrorLogRepository
    {
        return ErrorLogRepository::getInstance();
    }
}
