<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\UserExtendFieldsRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class UserExtendFieldsService extends CommonService implements ServiceInterface
{
    public function getRepository(): UserExtendFieldsRepository
    {
        return UserExtendFieldsRepository::getInstance();
    }
}
