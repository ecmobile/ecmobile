<?php

declare(strict_types=1);

namespace App\Entities;

use Juling\Foundation\Support\DTOHelper;
use OpenApi\Attributes as OA;

#[OA\Schema(schema: 'ShopCardEntity')]
class ShopCardEntity
{
    use DTOHelper;

    const string getCardId = 'card_id';

    const string getCardName = 'card_name';

    const string getCardImg = 'card_img';

    const string getCardFee = 'card_fee';

    const string getFreeMoney = 'free_money';

    const string getCardDesc = 'card_desc';

    #[OA\Property(property: 'cardId', description: '', type: 'integer')]
    private int $cardId;

    #[OA\Property(property: 'cardName', description: '', type: 'string')]
    private string $cardName;

    #[OA\Property(property: 'cardImg', description: '', type: 'string')]
    private string $cardImg;

    #[OA\Property(property: 'cardFee', description: '', type: 'float')]
    private float $cardFee;

    #[OA\Property(property: 'freeMoney', description: '', type: 'float')]
    private float $freeMoney;

    #[OA\Property(property: 'cardDesc', description: '', type: 'string')]
    private string $cardDesc;

    /**
     * 获取
     */
    public function getCardId(): int
    {
        return $this->cardId;
    }

    /**
     * 设置
     */
    public function setCardId(int $cardId): void
    {
        $this->cardId = $cardId;
    }

    /**
     * 获取
     */
    public function getCardName(): string
    {
        return $this->cardName;
    }

    /**
     * 设置
     */
    public function setCardName(string $cardName): void
    {
        $this->cardName = $cardName;
    }

    /**
     * 获取
     */
    public function getCardImg(): string
    {
        return $this->cardImg;
    }

    /**
     * 设置
     */
    public function setCardImg(string $cardImg): void
    {
        $this->cardImg = $cardImg;
    }

    /**
     * 获取
     */
    public function getCardFee(): float
    {
        return $this->cardFee;
    }

    /**
     * 设置
     */
    public function setCardFee(float $cardFee): void
    {
        $this->cardFee = $cardFee;
    }

    /**
     * 获取
     */
    public function getFreeMoney(): float
    {
        return $this->freeMoney;
    }

    /**
     * 设置
     */
    public function setFreeMoney(float $freeMoney): void
    {
        $this->freeMoney = $freeMoney;
    }

    /**
     * 获取
     */
    public function getCardDesc(): string
    {
        return $this->cardDesc;
    }

    /**
     * 设置
     */
    public function setCardDesc(string $cardDesc): void
    {
        $this->cardDesc = $cardDesc;
    }
}
