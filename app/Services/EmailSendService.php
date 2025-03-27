<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\EmailSendRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class EmailSendService extends CommonService implements ServiceInterface
{
    public function getRepository(): EmailSendRepository
    {
        return EmailSendRepository::getInstance();
    }
}
