<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\AdRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class AdService extends CommonService implements ServiceInterface
{
    public function getRepository(): AdRepository
    {
        return AdRepository::getInstance();
    }
}
