<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\VolumePriceRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class VolumePriceService extends CommonService implements ServiceInterface
{
    public function getRepository(): VolumePriceRepository
    {
        return VolumePriceRepository::getInstance();
    }
}
