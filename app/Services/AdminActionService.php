<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\AdminActionRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class AdminActionService extends CommonService implements ServiceInterface
{
    public function getRepository(): AdminActionRepository
    {
        return AdminActionRepository::getInstance();
    }
}
