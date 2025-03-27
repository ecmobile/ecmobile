<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Entities\AdminRoleEntity;
use App\Models\AdminRole;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Juling\Foundation\Contracts\RepositoryInterface;
use Juling\Foundation\Repositories\CurdRepository;

class AdminRoleRepository extends CurdRepository implements RepositoryInterface
{
    private static ?AdminRoleRepository $instance = null;

    /**
     * 单例 AdminRoleRepository
     */
    public static function getInstance(): AdminRoleRepository
    {
        if (is_null(self::$instance)) {
            self::$instance = new AdminRoleRepository;
        }

        return self::$instance;
    }

    /**
     * 添加 AdminRoleEntity
     */
    public function saveEntity(AdminRoleEntity $entity): int
    {
        return $this->save($entity->toEntity());
    }

    /**
     * 按照ID查询返回对象
     */
    public function findOneById(int $id): ?AdminRoleEntity
    {
        $data = $this->findById($id);
        if (empty($data)) {
            return null;
        }

        return new AdminRoleEntity($data);
    }

    /**
     * 按照条件查询返回对象
     */
    public function findOne(array $condition = []): ?AdminRoleEntity
    {
        $data = $this->find($condition);
        if (empty($data)) {
            return null;
        }

        return new AdminRoleEntity($data);
    }

    /**
     * 定义数据表查询构造器
     */
    public function builder(): Builder
    {
        return DB::table('admin_role');
    }

    /**
     * 定义数据表模型类
     */
    public function model(): Model
    {
        return new AdminRole;
    }
}
