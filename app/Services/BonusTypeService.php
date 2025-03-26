<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\BonusTypeRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class BonusTypeService extends CommonService implements ServiceInterface
{
    public function getRepository(): BonusTypeRepository
    {
        return BonusTypeRepository::getInstance();
    }
}
