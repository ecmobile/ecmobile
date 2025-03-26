<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\AutoManageRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class AutoManageService extends CommonService implements ServiceInterface
{
    public function getRepository(): AutoManageRepository
    {
        return AutoManageRepository::getInstance();
    }
}
