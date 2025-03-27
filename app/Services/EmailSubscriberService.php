<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\EmailSubscriberRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class EmailSubscriberService extends CommonService implements ServiceInterface
{
    public function getRepository(): EmailSubscriberRepository
    {
        return EmailSubscriberRepository::getInstance();
    }
}
