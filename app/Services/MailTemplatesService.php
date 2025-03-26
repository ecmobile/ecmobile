<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\MailTemplatesRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class MailTemplatesService extends CommonService implements ServiceInterface
{
    public function getRepository(): MailTemplatesRepository
    {
        return MailTemplatesRepository::getInstance();
    }
}
