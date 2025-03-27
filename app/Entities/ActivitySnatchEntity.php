<?php

declare(strict_types=1);

namespace App\Entities;

use Juling\Foundation\Support\DTOHelper;
use OpenApi\Attributes as OA;

#[OA\Schema(schema: 'ActivitySnatchEntity')]
class ActivitySnatchEntity
{
    use DTOHelper;

    const string getLogId = 'log_id';

    const string getSnatchId = 'snatch_id';

    const string getUserId = 'user_id';

    const string getBidPrice = 'bid_price';

    const string getBidTime = 'bid_time';

    #[OA\Property(property: 'logId', description: '', type: 'integer')]
    private int $logId;

    #[OA\Property(property: 'snatchId', description: '', type: 'integer')]
    private int $snatchId;

    #[OA\Property(property: 'userId', description: '', type: 'integer')]
    private int $userId;

    #[OA\Property(property: 'bidPrice', description: '', type: 'float')]
    private float $bidPrice;

    #[OA\Property(property: 'bidTime', description: '', type: 'integer')]
    private int $bidTime;

    /**
     * 获取
     */
    public function getLogId(): int
    {
        return $this->logId;
    }

    /**
     * 设置
     */
    public function setLogId(int $logId): void
    {
        $this->logId = $logId;
    }

    /**
     * 获取
     */
    public function getSnatchId(): int
    {
        return $this->snatchId;
    }

    /**
     * 设置
     */
    public function setSnatchId(int $snatchId): void
    {
        $this->snatchId = $snatchId;
    }

    /**
     * 获取
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * 设置
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * 获取
     */
    public function getBidPrice(): float
    {
        return $this->bidPrice;
    }

    /**
     * 设置
     */
    public function setBidPrice(float $bidPrice): void
    {
        $this->bidPrice = $bidPrice;
    }

    /**
     * 获取
     */
    public function getBidTime(): int
    {
        return $this->bidTime;
    }

    /**
     * 设置
     */
    public function setBidTime(int $bidTime): void
    {
        $this->bidTime = $bidTime;
    }
}
