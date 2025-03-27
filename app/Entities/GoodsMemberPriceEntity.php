<?php

declare(strict_types=1);

namespace App\Entities;

use Juling\Foundation\Support\DTOHelper;
use OpenApi\Attributes as OA;

#[OA\Schema(schema: 'GoodsMemberPriceEntity')]
class GoodsMemberPriceEntity
{
    use DTOHelper;

    const string getPriceId = 'price_id';

    const string getGoodsId = 'goods_id';

    const string getUserRank = 'user_rank';

    const string getUserPrice = 'user_price';

    #[OA\Property(property: 'priceId', description: '', type: 'integer')]
    private int $priceId;

    #[OA\Property(property: 'goodsId', description: '', type: 'integer')]
    private int $goodsId;

    #[OA\Property(property: 'userRank', description: '', type: 'integer')]
    private int $userRank;

    #[OA\Property(property: 'userPrice', description: '', type: 'float')]
    private float $userPrice;

    /**
     * 获取
     */
    public function getPriceId(): int
    {
        return $this->priceId;
    }

    /**
     * 设置
     */
    public function setPriceId(int $priceId): void
    {
        $this->priceId = $priceId;
    }

    /**
     * 获取
     */
    public function getGoodsId(): int
    {
        return $this->goodsId;
    }

    /**
     * 设置
     */
    public function setGoodsId(int $goodsId): void
    {
        $this->goodsId = $goodsId;
    }

    /**
     * 获取
     */
    public function getUserRank(): int
    {
        return $this->userRank;
    }

    /**
     * 设置
     */
    public function setUserRank(int $userRank): void
    {
        $this->userRank = $userRank;
    }

    /**
     * 获取
     */
    public function getUserPrice(): float
    {
        return $this->userPrice;
    }

    /**
     * 设置
     */
    public function setUserPrice(float $userPrice): void
    {
        $this->userPrice = $userPrice;
    }
}
