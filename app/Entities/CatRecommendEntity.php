<?php

declare(strict_types=1);

namespace App\Entities;

use Juling\Foundation\Support\DTOHelper;
use OpenApi\Attributes as OA;

#[OA\Schema(schema: 'CatRecommendEntity')]
class CatRecommendEntity
{
    use DTOHelper;

    const string getId = 'id';

    const string getCatId = 'cat_id';

    const string getRecommendType = 'recommend_type';

    #[OA\Property(property: 'id', description: 'ID', type: 'integer')]
    private int $id;

    #[OA\Property(property: 'catId', description: '', type: 'integer')]
    private int $catId;

    #[OA\Property(property: 'recommendType', description: '', type: 'integer')]
    private int $recommendType;

    /**
     * 获取ID
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * 设置ID
     */
    public function setId(int $id): void
    {
        $this->id = $id;
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
    public function getRecommendType(): int
    {
        return $this->recommendType;
    }

    /**
     * 设置
     */
    public function setRecommendType(int $recommendType): void
    {
        $this->recommendType = $recommendType;
    }
}
