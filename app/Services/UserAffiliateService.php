<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\UserAffiliateRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class UserAffiliateService extends CommonService implements ServiceInterface
{
    public function getRepository(): UserAffiliateRepository
    {
        return UserAffiliateRepository::getInstance();
    }
}
