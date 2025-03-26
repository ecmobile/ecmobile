<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\NavRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class NavService extends CommonService implements ServiceInterface
{
    public function getRepository(): NavRepository
    {
        return NavRepository::getInstance();
    }
}
