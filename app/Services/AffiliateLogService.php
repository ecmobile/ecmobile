<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\AffiliateLogRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class AffiliateLogService extends CommonService implements ServiceInterface
{
    public function getRepository(): AffiliateLogRepository
    {
        return AffiliateLogRepository::getInstance();
    }
}
