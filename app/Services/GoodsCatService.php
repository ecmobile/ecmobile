<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\GoodsCatRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class GoodsCatService extends CommonService implements ServiceInterface
{
    public function getRepository(): GoodsCatRepository
    {
        return GoodsCatRepository::getInstance();
    }
}
