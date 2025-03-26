<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\VoteRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class VoteService extends CommonService implements ServiceInterface
{
    public function getRepository(): VoteRepository
    {
        return VoteRepository::getInstance();
    }
}
