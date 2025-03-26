<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ArticleCatRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ArticleCatService extends CommonService implements ServiceInterface
{
    public function getRepository(): ArticleCatRepository
    {
        return ArticleCatRepository::getInstance();
    }
}
