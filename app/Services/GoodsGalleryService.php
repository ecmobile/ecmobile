<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\GoodsGalleryRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class GoodsGalleryService extends CommonService implements ServiceInterface
{
    public function getRepository(): GoodsGalleryRepository
    {
        return GoodsGalleryRepository::getInstance();
    }
}
