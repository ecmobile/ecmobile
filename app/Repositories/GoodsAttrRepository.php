<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Entities\GoodsAttrEntity;
use App\Models\GoodsAttr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Juling\Foundation\Contracts\RepositoryInterface;
use Juling\Foundation\Repositories\CurdRepository;

class GoodsAttrRepository extends CurdRepository implements RepositoryInterface
{
    private static ?GoodsAttrRepository $instance = null;

    /**
     * 单例 GoodsAttrRepository
     */
    public static function getInstance(): GoodsAttrRepository
    {
        if (is_null(self::$instance)) {
            self::$instance = new GoodsAttrRepository;
        }

        return self::$instance;
    }

    /**
     * 添加 GoodsAttrEntity
     */
    public function saveEntity(GoodsAttrEntity $entity): int
    {
        return $this->save($entity->toEntity());
    }

    /**
     * 按照ID查询返回对象
     */
    public function findOneById(int $id): ?GoodsAttrEntity
    {
        $data = $this->findById($id);
        if (empty($data)) {
            return null;
        }

        return new GoodsAttrEntity($data);
    }

    /**
     * 按照条件查询返回对象
     */
    public function findOne(array $condition = []): ?GoodsAttrEntity
    {
        $data = $this->find($condition);
        if (empty($data)) {
            return null;
        }

        return new GoodsAttrEntity($data);
    }

    /**
     * 定义数据表查询构造器
     */
    public function builder(): Builder
    {
        return DB::table('goods_attr');
    }

    /**
     * 定义数据表模型类
     */
    public function model(): Model
    {
        return new GoodsAttr;
    }
}
