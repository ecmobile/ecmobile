<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\UserFeedRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class UserFeedService extends CommonService implements ServiceInterface
{
    public function getRepository(): UserFeedRepository
    {
        return UserFeedRepository::getInstance();
    }
}
