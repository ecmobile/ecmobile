<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\RegFieldsRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class RegFieldsService extends CommonService implements ServiceInterface
{
    public function getRepository(): RegFieldsRepository
    {
        return RegFieldsRepository::getInstance();
    }
}
