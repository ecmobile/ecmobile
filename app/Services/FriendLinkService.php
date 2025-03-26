<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\FriendLinkRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class FriendLinkService extends CommonService implements ServiceInterface
{
    public function getRepository(): FriendLinkRepository
    {
        return FriendLinkRepository::getInstance();
    }
}
