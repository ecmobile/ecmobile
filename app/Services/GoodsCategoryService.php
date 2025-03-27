<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\GoodsCategoryRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class GoodsCategoryService extends CommonService implements ServiceInterface
{
    public function getRepository(): GoodsCategoryRepository
    {
        return GoodsCategoryRepository::getInstance();
    }
}
