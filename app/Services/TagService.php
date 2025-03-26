<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\TagRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class TagService extends CommonService implements ServiceInterface
{
    public function getRepository(): TagRepository
    {
        return TagRepository::getInstance();
    }
}
