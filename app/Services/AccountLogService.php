<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\AccountLogRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class AccountLogService extends CommonService implements ServiceInterface
{
    public function getRepository(): AccountLogRepository
    {
        return AccountLogRepository::getInstance();
    }
}
