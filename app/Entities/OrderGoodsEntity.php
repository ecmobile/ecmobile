<?php

declare(strict_types=1);

namespace App\Entities;

use Juling\Foundation\Support\DTOHelper;
use OpenApi\Attributes as OA;

#[OA\Schema(schema: 'OrderGoodsEntity')]
class OrderGoodsEntity
{
    use DTOHelper;

    const string getRecId = 'rec_id';

    const string getOrderId = 'order_id';

    const string getGoodsId = 'goods_id';

    const string getGoodsName = 'goods_name';

    const string getGoodsSn = 'goods_sn';

    const string getProductId = 'product_id';

    const string getGoodsNumber = 'goods_number';

    const string getMarketPrice = 'market_price';

    const string getGoodsPrice = 'goods_price';

    const string getGoodsAttr = 'goods_attr';

    const string getSendNumber = 'send_number';

    const string getIsReal = 'is_real';

    const string getExtensionCode = 'extension_code';

    const string getParentId = 'parent_id';

    const string getIsGift = 'is_gift';

    const string getGoodsAttrId = 'goods_attr_id';

    #[OA\Property(property: 'recId', description: '', type: 'integer')]
    private int $recId;

    #[OA\Property(property: 'orderId', description: '', type: 'integer')]
    private int $orderId;

    #[OA\Property(property: 'goodsId', description: '', type: 'integer')]
    private int $goodsId;

    #[OA\Property(property: 'goodsName', description: '', type: 'string')]
    private string $goodsName;

    #[OA\Property(property: 'goodsSn', description: '', type: 'string')]
    private string $goodsSn;

    #[OA\Property(property: 'productId', description: '', type: 'integer')]
    private int $productId;

    #[OA\Property(property: 'goodsNumber', description: '', type: 'integer')]
    private int $goodsNumber;

    #[OA\Property(property: 'marketPrice', description: '', type: 'float')]
    private float $marketPrice;

    #[OA\Property(property: 'goodsPrice', description: '', type: 'float')]
    private float $goodsPrice;

    #[OA\Property(property: 'goodsAttr', description: '', type: 'string')]
    private string $goodsAttr;

    #[OA\Property(property: 'sendNumber', description: '', type: 'integer')]
    private int $sendNumber;

    #[OA\Property(property: 'isReal', description: '', type: 'integer')]
    private int $isReal;

    #[OA\Property(property: 'extensionCode', description: '', type: 'string')]
    private string $extensionCode;

    #[OA\Property(property: 'parentId', description: '', type: 'integer')]
    private int $parentId;

    #[OA\Property(property: 'isGift', description: '', type: 'integer')]
    private int $isGift;

    #[OA\Property(property: 'goodsAttrId', description: '', type: 'string')]
    private string $goodsAttrId;

    /**
     * 获取
     */
    public function getRecId(): int
    {
        return $this->recId;
    }

    /**
     * 设置
     */
    public function setRecId(int $recId): void
    {
        $this->recId = $recId;
    }

    /**
     * 获取
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }

    /**
     * 设置
     */
    public function setOrderId(int $orderId): void
    {
        $this->orderId = $orderId;
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
    public function getGoodsName(): string
    {
        return $this->goodsName;
    }

    /**
     * 设置
     */
    public function setGoodsName(string $goodsName): void
    {
        $this->goodsName = $goodsName;
    }

    /**
     * 获取
     */
    public function getGoodsSn(): string
    {
        return $this->goodsSn;
    }

    /**
     * 设置
     */
    public function setGoodsSn(string $goodsSn): void
    {
        $this->goodsSn = $goodsSn;
    }

    /**
     * 获取
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * 设置
     */
    public function setProductId(int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * 获取
     */
    public function getGoodsNumber(): int
    {
        return $this->goodsNumber;
    }

    /**
     * 设置
     */
    public function setGoodsNumber(int $goodsNumber): void
    {
        $this->goodsNumber = $goodsNumber;
    }

    /**
     * 获取
     */
    public function getMarketPrice(): float
    {
        return $this->marketPrice;
    }

    /**
     * 设置
     */
    public function setMarketPrice(float $marketPrice): void
    {
        $this->marketPrice = $marketPrice;
    }

    /**
     * 获取
     */
    public function getGoodsPrice(): float
    {
        return $this->goodsPrice;
    }

    /**
     * 设置
     */
    public function setGoodsPrice(float $goodsPrice): void
    {
        $this->goodsPrice = $goodsPrice;
    }

    /**
     * 获取
     */
    public function getGoodsAttr(): string
    {
        return $this->goodsAttr;
    }

    /**
     * 设置
     */
    public function setGoodsAttr(string $goodsAttr): void
    {
        $this->goodsAttr = $goodsAttr;
    }

    /**
     * 获取
     */
    public function getSendNumber(): int
    {
        return $this->sendNumber;
    }

    /**
     * 设置
     */
    public function setSendNumber(int $sendNumber): void
    {
        $this->sendNumber = $sendNumber;
    }

    /**
     * 获取
     */
    public function getIsReal(): int
    {
        return $this->isReal;
    }

    /**
     * 设置
     */
    public function setIsReal(int $isReal): void
    {
        $this->isReal = $isReal;
    }

    /**
     * 获取
     */
    public function getExtensionCode(): string
    {
        return $this->extensionCode;
    }

    /**
     * 设置
     */
    public function setExtensionCode(string $extensionCode): void
    {
        $this->extensionCode = $extensionCode;
    }

    /**
     * 获取
     */
    public function getParentId(): int
    {
        return $this->parentId;
    }

    /**
     * 设置
     */
    public function setParentId(int $parentId): void
    {
        $this->parentId = $parentId;
    }

    /**
     * 获取
     */
    public function getIsGift(): int
    {
        return $this->isGift;
    }

    /**
     * 设置
     */
    public function setIsGift(int $isGift): void
    {
        $this->isGift = $isGift;
    }

    /**
     * 获取
     */
    public function getGoodsAttrId(): string
    {
        return $this->goodsAttrId;
    }

    /**
     * 设置
     */
    public function setGoodsAttrId(string $goodsAttrId): void
    {
        $this->goodsAttrId = $goodsAttrId;
    }
}
