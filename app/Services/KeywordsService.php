<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\KeywordsRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class KeywordsService extends CommonService implements ServiceInterface
{
    public function getRepository(): KeywordsRepository
    {
        return KeywordsRepository::getInstance();
    }
}
