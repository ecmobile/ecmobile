<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ShopFriendLinkRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class ShopFriendLinkService extends CommonService implements ServiceInterface
{
    public function getRepository(): ShopFriendLinkRepository
    {
        return ShopFriendLinkRepository::getInstance();
    }
}
