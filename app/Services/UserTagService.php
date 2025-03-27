<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\UserTagRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class UserTagService extends CommonService implements ServiceInterface
{
    public function getRepository(): UserTagRepository
    {
        return UserTagRepository::getInstance();
    }
}
