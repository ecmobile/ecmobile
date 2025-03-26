<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\LinkGoodsRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class LinkGoodsService extends CommonService implements ServiceInterface
{
    public function getRepository(): LinkGoodsRepository
    {
        return LinkGoodsRepository::getInstance();
    }
}
