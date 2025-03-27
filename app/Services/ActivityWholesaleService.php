<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ActivityWholesaleRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ActivityWholesaleService extends CommonService implements ServiceInterface
{
    public function getRepository(): ActivityWholesaleRepository
    {
        return ActivityWholesaleRepository::getInstance();
    }
}
