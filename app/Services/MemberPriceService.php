<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\MemberPriceRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class MemberPriceService extends CommonService implements ServiceInterface
{
    public function getRepository(): MemberPriceRepository
    {
        return MemberPriceRepository::getInstance();
    }
}
