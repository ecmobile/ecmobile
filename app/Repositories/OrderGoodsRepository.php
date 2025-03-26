<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Entities\OrderGoodsEntity;
use App\Models\OrderGoods;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Juling\Foundation\Contracts\RepositoryInterface;
use Juling\Foundation\Repositories\CurdRepository;

class OrderGoodsRepository extends CurdRepository implements RepositoryInterface
{
    private static ?OrderGoodsRepository $instance = null;

    /**
     * 单例 OrderGoodsRepository
     */
    public static function getInstance(): OrderGoodsRepository
    {
        if (is_null(self::$instance)) {
            self::$instance = new OrderGoodsRepository;
        }

        return self::$instance;
    }

    /**
     * 添加 OrderGoodsEntity
     */
    public function saveEntity(OrderGoodsEntity $entity): int
    {
        return $this->save($entity->toEntity());
    }

    /**
     * 按照ID查询返回对象
     */
    public function findOneById(int $id): ?OrderGoodsEntity
    {
        $data = $this->findById($id);
        if (empty($data)) {
            return null;
        }

        return new OrderGoodsEntity($data);
    }

    /**
     * 按照条件查询返回对象
     */
    public function findOne(array $condition = []): ?OrderGoodsEntity
    {
        $data = $this->find($condition);
        if (empty($data)) {
            return null;
        }

        return new OrderGoodsEntity($data);
    }

    /**
     * 定义数据表查询构造器
     */
    public function builder(): Builder
    {
        return DB::table('order_goods');
    }

    /**
     * 定义数据表模型类
     */
    public function model(): Model
    {
        return new OrderGoods;
    }
}
