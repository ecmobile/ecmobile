<?php

declare(strict_types=1);

namespace App\Entities;

use Juling\Foundation\Support\DTOHelper;
use OpenApi\Attributes as OA;

#[OA\Schema(schema: 'ActivityEntity')]
class ActivityEntity
{
    use DTOHelper;

    const string getActId = 'act_id';

    const string getActName = 'act_name';

    const string getStartTime = 'start_time';

    const string getEndTime = 'end_time';

    const string getUserRank = 'user_rank';

    const string getActRange = 'act_range';

    const string getActRangeExt = 'act_range_ext';

    const string getMinAmount = 'min_amount';

    const string getMaxAmount = 'max_amount';

    const string getActType = 'act_type';

    const string getActTypeExt = 'act_type_ext';

    const string getGift = 'gift';

    const string getSortOrder = 'sort_order';

    #[OA\Property(property: 'actId', description: '', type: 'integer')]
    private int $actId;

    #[OA\Property(property: 'actName', description: '', type: 'string')]
    private string $actName;

    #[OA\Property(property: 'startTime', description: '', type: 'integer')]
    private int $startTime;

    #[OA\Property(property: 'endTime', description: '', type: 'integer')]
    private int $endTime;

    #[OA\Property(property: 'userRank', description: '', type: 'string')]
    private string $userRank;

    #[OA\Property(property: 'actRange', description: '', type: 'integer')]
    private int $actRange;

    #[OA\Property(property: 'actRangeExt', description: '', type: 'string')]
    private string $actRangeExt;

    #[OA\Property(property: 'minAmount', description: '', type: 'float')]
    private float $minAmount;

    #[OA\Property(property: 'maxAmount', description: '', type: 'float')]
    private float $maxAmount;

    #[OA\Property(property: 'actType', description: '', type: 'integer')]
    private int $actType;

    #[OA\Property(property: 'actTypeExt', description: '', type: 'float')]
    private float $actTypeExt;

    #[OA\Property(property: 'gift', description: '', type: 'string')]
    private string $gift;

    #[OA\Property(property: 'sortOrder', description: '', type: 'integer')]
    private int $sortOrder;

    /**
     * 获取
     */
    public function getActId(): int
    {
        return $this->actId;
    }

    /**
     * 设置
     */
    public function setActId(int $actId): void
    {
        $this->actId = $actId;
    }

    /**
     * 获取
     */
    public function getActName(): string
    {
        return $this->actName;
    }

    /**
     * 设置
     */
    public function setActName(string $actName): void
    {
        $this->actName = $actName;
    }

    /**
     * 获取
     */
    public function getStartTime(): int
    {
        return $this->startTime;
    }

    /**
     * 设置
     */
    public function setStartTime(int $startTime): void
    {
        $this->startTime = $startTime;
    }

    /**
     * 获取
     */
    public function getEndTime(): int
    {
        return $this->endTime;
    }

    /**
     * 设置
     */
    public function setEndTime(int $endTime): void
    {
        $this->endTime = $endTime;
    }

    /**
     * 获取
     */
    public function getUserRank(): string
    {
        return $this->userRank;
    }

    /**
     * 设置
     */
    public function setUserRank(string $userRank): void
    {
        $this->userRank = $userRank;
    }

    /**
     * 获取
     */
    public function getActRange(): int
    {
        return $this->actRange;
    }

    /**
     * 设置
     */
    public function setActRange(int $actRange): void
    {
        $this->actRange = $actRange;
    }

    /**
     * 获取
     */
    public function getActRangeExt(): string
    {
        return $this->actRangeExt;
    }

    /**
     * 设置
     */
    public function setActRangeExt(string $actRangeExt): void
    {
        $this->actRangeExt = $actRangeExt;
    }

    /**
     * 获取
     */
    public function getMinAmount(): float
    {
        return $this->minAmount;
    }

    /**
     * 设置
     */
    public function setMinAmount(float $minAmount): void
    {
        $this->minAmount = $minAmount;
    }

    /**
     * 获取
     */
    public function getMaxAmount(): float
    {
        return $this->maxAmount;
    }

    /**
     * 设置
     */
    public function setMaxAmount(float $maxAmount): void
    {
        $this->maxAmount = $maxAmount;
    }

    /**
     * 获取
     */
    public function getActType(): int
    {
        return $this->actType;
    }

    /**
     * 设置
     */
    public function setActType(int $actType): void
    {
        $this->actType = $actType;
    }

    /**
     * 获取
     */
    public function getActTypeExt(): float
    {
        return $this->actTypeExt;
    }

    /**
     * 设置
     */
    public function setActTypeExt(float $actTypeExt): void
    {
        $this->actTypeExt = $actTypeExt;
    }

    /**
     * 获取
     */
    public function getGift(): string
    {
        return $this->gift;
    }

    /**
     * 设置
     */
    public function setGift(string $gift): void
    {
        $this->gift = $gift;
    }

    /**
     * 获取
     */
    public function getSortOrder(): int
    {
        return $this->sortOrder;
    }

    /**
     * 设置
     */
    public function setSortOrder(int $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }
}
