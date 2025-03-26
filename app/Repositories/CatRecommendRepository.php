<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Entities\CatRecommendEntity;
use App\Models\CatRecommend;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Juling\Foundation\Contracts\RepositoryInterface;
use Juling\Foundation\Repositories\CurdRepository;

class CatRecommendRepository extends CurdRepository implements RepositoryInterface
{
    private static ?CatRecommendRepository $instance = null;

    /**
     * 单例 CatRecommendRepository
     */
    public static function getInstance(): CatRecommendRepository
    {
        if (is_null(self::$instance)) {
            self::$instance = new CatRecommendRepository;
        }

        return self::$instance;
    }

    /**
     * 添加 CatRecommendEntity
     */
    public function saveEntity(CatRecommendEntity $entity): int
    {
        return $this->save($entity->toEntity());
    }

    /**
     * 按照ID查询返回对象
     */
    public function findOneById(int $id): ?CatRecommendEntity
    {
        $data = $this->findById($id);
        if (empty($data)) {
            return null;
        }

        return new CatRecommendEntity($data);
    }

    /**
     * 按照条件查询返回对象
     */
    public function findOne(array $condition = []): ?CatRecommendEntity
    {
        $data = $this->find($condition);
        if (empty($data)) {
            return null;
        }

        return new CatRecommendEntity($data);
    }

    /**
     * 定义数据表查询构造器
     */
    public function builder(): Builder
    {
        return DB::table('cat_recommend');
    }

    /**
     * 定义数据表模型类
     */
    public function model(): Model
    {
        return new CatRecommend;
    }
}
