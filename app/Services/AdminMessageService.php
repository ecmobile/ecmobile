<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\AdminMessageRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class AdminMessageService extends CommonService implements ServiceInterface
{
    public function getRepository(): AdminMessageRepository
    {
        return AdminMessageRepository::getInstance();
    }
}
