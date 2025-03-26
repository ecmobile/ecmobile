<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\PluginsRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class PluginsService extends CommonService implements ServiceInterface
{
    public function getRepository(): PluginsRepository
    {
        return PluginsRepository::getInstance();
    }
}
