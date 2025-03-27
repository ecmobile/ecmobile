<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\UserExtendInfoRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class UserExtendInfoService extends CommonService implements ServiceInterface
{
    public function getRepository(): UserExtendInfoRepository
    {
        return UserExtendInfoRepository::getInstance();
    }
}
