<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\OrderActionRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class OrderActionService extends CommonService implements ServiceInterface
{
    public function getRepository(): OrderActionRepository
    {
        return OrderActionRepository::getInstance();
    }
}
