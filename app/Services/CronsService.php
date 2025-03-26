<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\CronsRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class CronsService extends CommonService implements ServiceInterface
{
    public function getRepository(): CronsRepository
    {
        return CronsRepository::getInstance();
    }
}
