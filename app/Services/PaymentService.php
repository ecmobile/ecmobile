<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\PaymentRepository;
use Juling\Foundation\Contracts\ServiceInterface;
use Juling\Foundation\Services\CommonService;

class PaymentService extends CommonService implements ServiceInterface
{
    public function getRepository(): PaymentRepository
    {
        return PaymentRepository::getInstance();
    }
}
