<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\BackGoodsRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class BackGoodsService extends CommonService implements ServiceInterface
{
    public function getRepository(): BackGoodsRepository
    {
        return BackGoodsRepository::getInstance();
    }
}
