<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\SearchKeywordsRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class SearchKeywordsService extends CommonService implements ServiceInterface
{
    public function getRepository(): SearchKeywordsRepository
    {
        return SearchKeywordsRepository::getInstance();
    }
}
