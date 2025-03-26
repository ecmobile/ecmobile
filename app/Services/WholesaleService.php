<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\WholesaleRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class WholesaleService extends CommonService implements ServiceInterface
{
    public function getRepository(): WholesaleRepository
    {
        return WholesaleRepository::getInstance();
    }
}
