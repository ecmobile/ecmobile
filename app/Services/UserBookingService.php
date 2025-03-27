<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\UserBookingRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class UserBookingService extends CommonService implements ServiceInterface
{
    public function getRepository(): UserBookingRepository
    {
        return UserBookingRepository::getInstance();
    }
}
