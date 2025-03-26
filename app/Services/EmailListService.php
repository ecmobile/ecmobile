<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\EmailListRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class EmailListService extends CommonService implements ServiceInterface
{
    public function getRepository(): EmailListRepository
    {
        return EmailListRepository::getInstance();
    }
}
