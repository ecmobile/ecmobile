<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\VoteOptionRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class VoteOptionService extends CommonService implements ServiceInterface
{
    public function getRepository(): VoteOptionRepository
    {
        return VoteOptionRepository::getInstance();
    }
}
