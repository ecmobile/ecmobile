<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ActivityAuctionRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ActivityAuctionService extends CommonService implements ServiceInterface
{
    public function getRepository(): ActivityAuctionRepository
    {
        return ActivityAuctionRepository::getInstance();
    }
}
