<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\UserCartRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class UserCartService extends CommonService implements ServiceInterface
{
    public function getRepository(): UserCartRepository
    {
        return UserCartRepository::getInstance();
    }
}
