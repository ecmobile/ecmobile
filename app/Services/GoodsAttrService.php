<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\GoodsAttrRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class GoodsAttrService extends CommonService implements ServiceInterface
{
    public function getRepository(): GoodsAttrRepository
    {
        return GoodsAttrRepository::getInstance();
    }
}
