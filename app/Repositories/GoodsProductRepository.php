<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Entities\GoodsProductEntity;
use App\Models\GoodsProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Juling\Foundation\Contracts\RepositoryInterface;
use Juling\Foundation\Repositories\CurdRepository;

class GoodsProductRepository extends CurdRepository implements RepositoryInterface
{
    private static ?GoodsProductRepository $instance = null;

    /**
     * 单例 GoodsProductRepository
     */
    public static function getInstance(): GoodsProductRepository
    {
        if (is_null(self::$instance)) {
            self::$instance = new GoodsProductRepository;
        }

        return self::$instance;
    }

    /**
     * 添加 GoodsProductEntity
     */
    public function saveEntity(GoodsProductEntity $entity): int
    {
        return $this->save($entity->toEntity());
    }

    /**
     * 按照ID查询返回对象
     */
    public function findOneById(int $id): ?GoodsProductEntity
    {
        $data = $this->findById($id);
        if (empty($data)) {
            return null;
        }

        return new GoodsProductEntity($data);
    }

    /**
     * 按照条件查询返回对象
     */
    public function findOne(array $condition = []): ?GoodsProductEntity
    {
        $data = $this->find($condition);
        if (empty($data)) {
            return null;
        }

        return new GoodsProductEntity($data);
    }

    /**
     * 定义数据表查询构造器
     */
    public function builder(): Builder
    {
        return DB::table('goods_product');
    }

    /**
     * 定义数据表模型类
     */
    public function model(): Model
    {
        return new GoodsProduct;
    }
}
