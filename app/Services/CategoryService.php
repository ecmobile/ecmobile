<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\CategoryRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class CategoryService extends CommonService implements ServiceInterface
{
    public function getRepository(): CategoryRepository
    {
        return CategoryRepository::getInstance();
    }
}
