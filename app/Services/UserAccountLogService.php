<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\UserAccountLogRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class UserAccountLogService extends CommonService implements ServiceInterface
{
    public function getRepository(): UserAccountLogRepository
    {
        return UserAccountLogRepository::getInstance();
    }
}
