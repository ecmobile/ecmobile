<?php

declare(strict_types=1);

namespace App\Entities;

use Juling\Foundation\Support\DTOHelper;
use OpenApi\Attributes as OA;

#[OA\Schema(schema: 'ShopPackEntity')]
class ShopPackEntity
{
    use DTOHelper;

    const string getPackId = 'pack_id';

    const string getPackName = 'pack_name';

    const string getPackImg = 'pack_img';

    const string getPackFee = 'pack_fee';

    const string getFreeMoney = 'free_money';

    const string getPackDesc = 'pack_desc';

    #[OA\Property(property: 'packId', description: '', type: 'integer')]
    private int $packId;

    #[OA\Property(property: 'packName', description: '', type: 'string')]
    private string $packName;

    #[OA\Property(property: 'packImg', description: '', type: 'string')]
    private string $packImg;

    #[OA\Property(property: 'packFee', description: '', type: 'float')]
    private float $packFee;

    #[OA\Property(property: 'freeMoney', description: '', type: 'integer')]
    private int $freeMoney;

    #[OA\Property(property: 'packDesc', description: '', type: 'string')]
    private string $packDesc;

    /**
     * 获取
     */
    public function getPackId(): int
    {
        return $this->packId;
    }

    /**
     * 设置
     */
    public function setPackId(int $packId): void
    {
        $this->packId = $packId;
    }

    /**
     * 获取
     */
    public function getPackName(): string
    {
        return $this->packName;
    }

    /**
     * 设置
     */
    public function setPackName(string $packName): void
    {
        $this->packName = $packName;
    }

    /**
     * 获取
     */
    public function getPackImg(): string
    {
        return $this->packImg;
    }

    /**
     * 设置
     */
    public function setPackImg(string $packImg): void
    {
        $this->packImg = $packImg;
    }

    /**
     * 获取
     */
    public function getPackFee(): float
    {
        return $this->packFee;
    }

    /**
     * 设置
     */
    public function setPackFee(float $packFee): void
    {
        $this->packFee = $packFee;
    }

    /**
     * 获取
     */
    public function getFreeMoney(): int
    {
        return $this->freeMoney;
    }

    /**
     * 设置
     */
    public function setFreeMoney(int $freeMoney): void
    {
        $this->freeMoney = $freeMoney;
    }

    /**
     * 获取
     */
    public function getPackDesc(): string
    {
        return $this->packDesc;
    }

    /**
     * 设置
     */
    public function setPackDesc(string $packDesc): void
    {
        $this->packDesc = $packDesc;
    }
}
