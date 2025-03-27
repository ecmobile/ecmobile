<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\GoodsCatRecommendRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class GoodsCatRecommendService extends CommonService implements ServiceInterface
{
    public function getRepository(): GoodsCatRecommendRepository
    {
        return GoodsCatRecommendRepository::getInstance();
    }
}
