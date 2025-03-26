<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\EmailSendlistRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class EmailSendlistService extends CommonService implements ServiceInterface
{
    public function getRepository(): EmailSendlistRepository
    {
        return EmailSendlistRepository::getInstance();
    }
}
