<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\PackRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class PackService extends CommonService implements ServiceInterface
{
    public function getRepository(): PackRepository
    {
        return PackRepository::getInstance();
    }
}
