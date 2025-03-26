<?php

declare(strict_types=1);

namespace App\Entities;

use Juling\Foundation\Support\DTOHelper;
use OpenApi\Attributes as OA;

#[OA\Schema(schema: 'GoodsEntity')]
class GoodsEntity
{
    use DTOHelper;

    const string getGoodsId = 'goods_id';

    const string getCatId = 'cat_id';

    const string getGoodsSn = 'goods_sn';

    const string getGoodsName = 'goods_name';

    const string getGoodsNameStyle = 'goods_name_style';

    const string getClickCount = 'click_count';

    const string getBrandId = 'brand_id';

    const string getProviderName = 'provider_name';

    const string getGoodsNumber = 'goods_number';

    const string getGoodsWeight = 'goods_weight';

    const string getMarketPrice = 'market_price';

    const string getShopPrice = 'shop_price';

    const string getPromotePrice = 'promote_price';

    const string getPromoteStartDate = 'promote_start_date';

    const string getPromoteEndDate = 'promote_end_date';

    const string getWarnNumber = 'warn_number';

    const string getKeywords = 'keywords';

    const string getGoodsBrief = 'goods_brief';

    const string getGoodsDesc = 'goods_desc';

    const string getGoodsThumb = 'goods_thumb';

    const string getGoodsImg = 'goods_img';

    const string getOriginalImg = 'original_img';

    const string getIsReal = 'is_real';

    const string getExtensionCode = 'extension_code';

    const string getIsOnSale = 'is_on_sale';

    const string getIsAloneSale = 'is_alone_sale';

    const string getIsShipping = 'is_shipping';

    const string getIntegral = 'integral';

    const string getAddTime = 'add_time';

    const string getSortOrder = 'sort_order';

    const string getIsDelete = 'is_delete';

    const string getIsBest = 'is_best';

    const string getIsNew = 'is_new';

    const string getIsHot = 'is_hot';

    const string getIsPromote = 'is_promote';

    const string getBonusTypeId = 'bonus_type_id';

    const string getLastUpdate = 'last_update';

    const string getGoodsType = 'goods_type';

    const string getSellerNote = 'seller_note';

    const string getGiveIntegral = 'give_integral';

    const string getRankIntegral = 'rank_integral';

    const string getSuppliersId = 'suppliers_id';

    const string getIsCheck = 'is_check';

    #[OA\Property(property: 'goodsId', description: '', type: 'integer')]
    private int $goodsId;

    #[OA\Property(property: 'catId', description: '', type: 'integer')]
    private int $catId;

    #[OA\Property(property: 'goodsSn', description: '', type: 'string')]
    private string $goodsSn;

    #[OA\Property(property: 'goodsName', description: '', type: 'string')]
    private string $goodsName;

    #[OA\Property(property: 'goodsNameStyle', description: '', type: 'string')]
    private string $goodsNameStyle;

    #[OA\Property(property: 'clickCount', description: '', type: 'integer')]
    private int $clickCount;

    #[OA\Property(property: 'brandId', description: '', type: 'integer')]
    private int $brandId;

    #[OA\Property(property: 'providerName', description: '', type: 'string')]
    private string $providerName;

    #[OA\Property(property: 'goodsNumber', description: '', type: 'integer')]
    private int $goodsNumber;

    #[OA\Property(property: 'goodsWeight', description: '', type: 'float')]
    private float $goodsWeight;

    #[OA\Property(property: 'marketPrice', description: '', type: 'float')]
    private float $marketPrice;

    #[OA\Property(property: 'shopPrice', description: '', type: 'float')]
    private float $shopPrice;

    #[OA\Property(property: 'promotePrice', description: '', type: 'float')]
    private float $promotePrice;

    #[OA\Property(property: 'promoteStartDate', description: '', type: 'integer')]
    private int $promoteStartDate;

    #[OA\Property(property: 'promoteEndDate', description: '', type: 'integer')]
    private int $promoteEndDate;

    #[OA\Property(property: 'warnNumber', description: '', type: 'integer')]
    private int $warnNumber;

    #[OA\Property(property: 'keywords', description: '', type: 'string')]
    private string $keywords;

    #[OA\Property(property: 'goodsBrief', description: '', type: 'string')]
    private string $goodsBrief;

    #[OA\Property(property: 'goodsDesc', description: '', type: 'string')]
    private string $goodsDesc;

    #[OA\Property(property: 'goodsThumb', description: '', type: 'string')]
    private string $goodsThumb;

    #[OA\Property(property: 'goodsImg', description: '', type: 'string')]
    private string $goodsImg;

    #[OA\Property(property: 'originalImg', description: '', type: 'string')]
    private string $originalImg;

    #[OA\Property(property: 'isReal', description: '', type: 'integer')]
    private int $isReal;

    #[OA\Property(property: 'extensionCode', description: '', type: 'string')]
    private string $extensionCode;

    #[OA\Property(property: 'isOnSale', description: '', type: 'integer')]
    private int $isOnSale;

    #[OA\Property(property: 'isAloneSale', description: '', type: 'integer')]
    private int $isAloneSale;

    #[OA\Property(property: 'isShipping', description: '', type: 'integer')]
    private int $isShipping;

    #[OA\Property(property: 'integral', description: '', type: 'integer')]
    private int $integral;

    #[OA\Property(property: 'addTime', description: '', type: 'integer')]
    private int $addTime;

    #[OA\Property(property: 'sortOrder', description: '', type: 'integer')]
    private int $sortOrder;

    #[OA\Property(property: 'isDelete', description: '', type: 'integer')]
    private int $isDelete;

    #[OA\Property(property: 'isBest', description: '', type: 'integer')]
    private int $isBest;

    #[OA\Property(property: 'isNew', description: '', type: 'integer')]
    private int $isNew;

    #[OA\Property(property: 'isHot', description: '', type: 'integer')]
    private int $isHot;

    #[OA\Property(property: 'isPromote', description: '', type: 'integer')]
    private int $isPromote;

    #[OA\Property(property: 'bonusTypeId', description: '', type: 'integer')]
    private int $bonusTypeId;

    #[OA\Property(property: 'lastUpdate', description: '', type: 'integer')]
    private int $lastUpdate;

    #[OA\Property(property: 'goodsType', description: '', type: 'integer')]
    private int $goodsType;

    #[OA\Property(property: 'sellerNote', description: '', type: 'string')]
    private string $sellerNote;

    #[OA\Property(property: 'giveIntegral', description: '', type: 'integer')]
    private int $giveIntegral;

    #[OA\Property(property: 'rankIntegral', description: '', type: 'integer')]
    private int $rankIntegral;

    #[OA\Property(property: 'suppliersId', description: '', type: 'integer')]
    private int $suppliersId;

    #[OA\Property(property: 'isCheck', description: '', type: 'integer')]
    private int $isCheck;

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
    public function getCatId(): int
    {
        return $this->catId;
    }

    /**
     * 设置
     */
    public function setCatId(int $catId): void
    {
        $this->catId = $catId;
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
    public function getGoodsNameStyle(): string
    {
        return $this->goodsNameStyle;
    }

    /**
     * 设置
     */
    public function setGoodsNameStyle(string $goodsNameStyle): void
    {
        $this->goodsNameStyle = $goodsNameStyle;
    }

    /**
     * 获取
     */
    public function getClickCount(): int
    {
        return $this->clickCount;
    }

    /**
     * 设置
     */
    public function setClickCount(int $clickCount): void
    {
        $this->clickCount = $clickCount;
    }

    /**
     * 获取
     */
    public function getBrandId(): int
    {
        return $this->brandId;
    }

    /**
     * 设置
     */
    public function setBrandId(int $brandId): void
    {
        $this->brandId = $brandId;
    }

    /**
     * 获取
     */
    public function getProviderName(): string
    {
        return $this->providerName;
    }

    /**
     * 设置
     */
    public function setProviderName(string $providerName): void
    {
        $this->providerName = $providerName;
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
    public function getGoodsWeight(): float
    {
        return $this->goodsWeight;
    }

    /**
     * 设置
     */
    public function setGoodsWeight(float $goodsWeight): void
    {
        $this->goodsWeight = $goodsWeight;
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
    public function getShopPrice(): float
    {
        return $this->shopPrice;
    }

    /**
     * 设置
     */
    public function setShopPrice(float $shopPrice): void
    {
        $this->shopPrice = $shopPrice;
    }

    /**
     * 获取
     */
    public function getPromotePrice(): float
    {
        return $this->promotePrice;
    }

    /**
     * 设置
     */
    public function setPromotePrice(float $promotePrice): void
    {
        $this->promotePrice = $promotePrice;
    }

    /**
     * 获取
     */
    public function getPromoteStartDate(): int
    {
        return $this->promoteStartDate;
    }

    /**
     * 设置
     */
    public function setPromoteStartDate(int $promoteStartDate): void
    {
        $this->promoteStartDate = $promoteStartDate;
    }

    /**
     * 获取
     */
    public function getPromoteEndDate(): int
    {
        return $this->promoteEndDate;
    }

    /**
     * 设置
     */
    public function setPromoteEndDate(int $promoteEndDate): void
    {
        $this->promoteEndDate = $promoteEndDate;
    }

    /**
     * 获取
     */
    public function getWarnNumber(): int
    {
        return $this->warnNumber;
    }

    /**
     * 设置
     */
    public function setWarnNumber(int $warnNumber): void
    {
        $this->warnNumber = $warnNumber;
    }

    /**
     * 获取
     */
    public function getKeywords(): string
    {
        return $this->keywords;
    }

    /**
     * 设置
     */
    public function setKeywords(string $keywords): void
    {
        $this->keywords = $keywords;
    }

    /**
     * 获取
     */
    public function getGoodsBrief(): string
    {
        return $this->goodsBrief;
    }

    /**
     * 设置
     */
    public function setGoodsBrief(string $goodsBrief): void
    {
        $this->goodsBrief = $goodsBrief;
    }

    /**
     * 获取
     */
    public function getGoodsDesc(): string
    {
        return $this->goodsDesc;
    }

    /**
     * 设置
     */
    public function setGoodsDesc(string $goodsDesc): void
    {
        $this->goodsDesc = $goodsDesc;
    }

    /**
     * 获取
     */
    public function getGoodsThumb(): string
    {
        return $this->goodsThumb;
    }

    /**
     * 设置
     */
    public function setGoodsThumb(string $goodsThumb): void
    {
        $this->goodsThumb = $goodsThumb;
    }

    /**
     * 获取
     */
    public function getGoodsImg(): string
    {
        return $this->goodsImg;
    }

    /**
     * 设置
     */
    public function setGoodsImg(string $goodsImg): void
    {
        $this->goodsImg = $goodsImg;
    }

    /**
     * 获取
     */
    public function getOriginalImg(): string
    {
        return $this->originalImg;
    }

    /**
     * 设置
     */
    public function setOriginalImg(string $originalImg): void
    {
        $this->originalImg = $originalImg;
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
    public function getIsOnSale(): int
    {
        return $this->isOnSale;
    }

    /**
     * 设置
     */
    public function setIsOnSale(int $isOnSale): void
    {
        $this->isOnSale = $isOnSale;
    }

    /**
     * 获取
     */
    public function getIsAloneSale(): int
    {
        return $this->isAloneSale;
    }

    /**
     * 设置
     */
    public function setIsAloneSale(int $isAloneSale): void
    {
        $this->isAloneSale = $isAloneSale;
    }

    /**
     * 获取
     */
    public function getIsShipping(): int
    {
        return $this->isShipping;
    }

    /**
     * 设置
     */
    public function setIsShipping(int $isShipping): void
    {
        $this->isShipping = $isShipping;
    }

    /**
     * 获取
     */
    public function getIntegral(): int
    {
        return $this->integral;
    }

    /**
     * 设置
     */
    public function setIntegral(int $integral): void
    {
        $this->integral = $integral;
    }

    /**
     * 获取
     */
    public function getAddTime(): int
    {
        return $this->addTime;
    }

    /**
     * 设置
     */
    public function setAddTime(int $addTime): void
    {
        $this->addTime = $addTime;
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

    /**
     * 获取
     */
    public function getIsDelete(): int
    {
        return $this->isDelete;
    }

    /**
     * 设置
     */
    public function setIsDelete(int $isDelete): void
    {
        $this->isDelete = $isDelete;
    }

    /**
     * 获取
     */
    public function getIsBest(): int
    {
        return $this->isBest;
    }

    /**
     * 设置
     */
    public function setIsBest(int $isBest): void
    {
        $this->isBest = $isBest;
    }

    /**
     * 获取
     */
    public function getIsNew(): int
    {
        return $this->isNew;
    }

    /**
     * 设置
     */
    public function setIsNew(int $isNew): void
    {
        $this->isNew = $isNew;
    }

    /**
     * 获取
     */
    public function getIsHot(): int
    {
        return $this->isHot;
    }

    /**
     * 设置
     */
    public function setIsHot(int $isHot): void
    {
        $this->isHot = $isHot;
    }

    /**
     * 获取
     */
    public function getIsPromote(): int
    {
        return $this->isPromote;
    }

    /**
     * 设置
     */
    public function setIsPromote(int $isPromote): void
    {
        $this->isPromote = $isPromote;
    }

    /**
     * 获取
     */
    public function getBonusTypeId(): int
    {
        return $this->bonusTypeId;
    }

    /**
     * 设置
     */
    public function setBonusTypeId(int $bonusTypeId): void
    {
        $this->bonusTypeId = $bonusTypeId;
    }

    /**
     * 获取
     */
    public function getLastUpdate(): int
    {
        return $this->lastUpdate;
    }

    /**
     * 设置
     */
    public function setLastUpdate(int $lastUpdate): void
    {
        $this->lastUpdate = $lastUpdate;
    }

    /**
     * 获取
     */
    public function getGoodsType(): int
    {
        return $this->goodsType;
    }

    /**
     * 设置
     */
    public function setGoodsType(int $goodsType): void
    {
        $this->goodsType = $goodsType;
    }

    /**
     * 获取
     */
    public function getSellerNote(): string
    {
        return $this->sellerNote;
    }

    /**
     * 设置
     */
    public function setSellerNote(string $sellerNote): void
    {
        $this->sellerNote = $sellerNote;
    }

    /**
     * 获取
     */
    public function getGiveIntegral(): int
    {
        return $this->giveIntegral;
    }

    /**
     * 设置
     */
    public function setGiveIntegral(int $giveIntegral): void
    {
        $this->giveIntegral = $giveIntegral;
    }

    /**
     * 获取
     */
    public function getRankIntegral(): int
    {
        return $this->rankIntegral;
    }

    /**
     * 设置
     */
    public function setRankIntegral(int $rankIntegral): void
    {
        $this->rankIntegral = $rankIntegral;
    }

    /**
     * 获取
     */
    public function getSuppliersId(): int
    {
        return $this->suppliersId;
    }

    /**
     * 设置
     */
    public function setSuppliersId(int $suppliersId): void
    {
        $this->suppliersId = $suppliersId;
    }

    /**
     * 获取
     */
    public function getIsCheck(): int
    {
        return $this->isCheck;
    }

    /**
     * 设置
     */
    public function setIsCheck(int $isCheck): void
    {
        $this->isCheck = $isCheck;
    }
}
