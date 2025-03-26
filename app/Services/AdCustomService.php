<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\AdCustomRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class AdCustomService extends CommonService implements ServiceInterface
{
    public function getRepository(): AdCustomRepository
    {
        return AdCustomRepository::getInstance();
    }
}
