<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Entities\SearchengineEntity;
use App\Models\Searchengine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Juling\Foundation\Contracts\RepositoryInterface;
use Juling\Foundation\Repositories\CurdRepository;

class SearchengineRepository extends CurdRepository implements RepositoryInterface
{
    private static ?SearchengineRepository $instance = null;

    /**
     * 单例 SearchengineRepository
     */
    public static function getInstance(): SearchengineRepository
    {
        if (is_null(self::$instance)) {
            self::$instance = new SearchengineRepository;
        }

        return self::$instance;
    }

    /**
     * 添加 SearchengineEntity
     */
    public function saveEntity(SearchengineEntity $entity): int
    {
        return $this->save($entity->toEntity());
    }

    /**
     * 按照ID查询返回对象
     */
    public function findOneById(int $id): ?SearchengineEntity
    {
        $data = $this->findById($id);
        if (empty($data)) {
            return null;
        }

        return new SearchengineEntity($data);
    }

    /**
     * 按照条件查询返回对象
     */
    public function findOne(array $condition = []): ?SearchengineEntity
    {
        $data = $this->find($condition);
        if (empty($data)) {
            return null;
        }

        return new SearchengineEntity($data);
    }

    /**
     * 定义数据表查询构造器
     */
    public function builder(): Builder
    {
        return DB::table('searchengine');
    }

    /**
     * 定义数据表模型类
     */
    public function model(): Model
    {
        return new Searchengine;
    }
}
