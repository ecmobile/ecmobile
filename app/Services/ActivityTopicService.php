<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ActivityTopicRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ActivityTopicService extends CommonService implements ServiceInterface
{
    public function getRepository(): ActivityTopicRepository
    {
        return ActivityTopicRepository::getInstance();
    }
}
