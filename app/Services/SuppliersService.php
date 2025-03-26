<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\SuppliersRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class SuppliersService extends CommonService implements ServiceInterface
{
    public function getRepository(): SuppliersRepository
    {
        return SuppliersRepository::getInstance();
    }
}
