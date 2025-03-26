<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\UserBonusRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class UserBonusService extends CommonService implements ServiceInterface
{
    public function getRepository(): UserBonusRepository
    {
        return UserBonusRepository::getInstance();
    }
}
