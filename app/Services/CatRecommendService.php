<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\CatRecommendRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class CatRecommendService extends CommonService implements ServiceInterface
{
    public function getRepository(): CatRecommendRepository
    {
        return CatRecommendRepository::getInstance();
    }
}
