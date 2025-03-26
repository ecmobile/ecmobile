<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\VirtualCardRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class VirtualCardService extends CommonService implements ServiceInterface
{
    public function getRepository(): VirtualCardRepository
    {
        return VirtualCardRepository::getInstance();
    }
}
