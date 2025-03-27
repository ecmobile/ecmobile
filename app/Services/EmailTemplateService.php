<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\EmailTemplateRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class EmailTemplateService extends CommonService implements ServiceInterface
{
    public function getRepository(): EmailTemplateRepository
    {
        return EmailTemplateRepository::getInstance();
    }
}
