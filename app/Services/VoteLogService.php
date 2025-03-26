<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\VoteLogRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class VoteLogService extends CommonService implements ServiceInterface
{
    public function getRepository(): VoteLogRepository
    {
        return VoteLogRepository::getInstance();
    }
}
