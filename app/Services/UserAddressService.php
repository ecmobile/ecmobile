<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\UserAddressRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class UserAddressService extends CommonService implements ServiceInterface
{
    public function getRepository(): UserAddressRepository
    {
        return UserAddressRepository::getInstance();
    }
}
