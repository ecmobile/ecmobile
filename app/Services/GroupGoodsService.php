<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\GroupGoodsRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class GroupGoodsService extends CommonService implements ServiceInterface
{
    public function getRepository(): GroupGoodsRepository
    {
        return GroupGoodsRepository::getInstance();
    }
}
