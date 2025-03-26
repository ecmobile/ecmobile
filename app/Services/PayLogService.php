<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\PayLogRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class PayLogService extends CommonService implements ServiceInterface
{
    public function getRepository(): PayLogRepository
    {
        return PayLogRepository::getInstance();
    }
}
