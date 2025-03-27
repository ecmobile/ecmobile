<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\UserCollectRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class UserCollectService extends CommonService implements ServiceInterface
{
    public function getRepository(): UserCollectRepository
    {
        return UserCollectRepository::getInstance();
    }
}
