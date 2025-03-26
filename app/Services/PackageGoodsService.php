<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\PackageGoodsRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class PackageGoodsService extends CommonService implements ServiceInterface
{
    public function getRepository(): PackageGoodsRepository
    {
        return PackageGoodsRepository::getInstance();
    }
}
