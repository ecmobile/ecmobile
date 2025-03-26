<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\SearchengineRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class SearchengineService extends CommonService implements ServiceInterface
{
    public function getRepository(): SearchengineRepository
    {
        return SearchengineRepository::getInstance();
    }
}
