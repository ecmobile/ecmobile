<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ArticleRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ArticleService extends CommonService implements ServiceInterface
{
    public function getRepository(): ArticleRepository
    {
        return ArticleRepository::getInstance();
    }
}
