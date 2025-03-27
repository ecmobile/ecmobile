<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Entities\UserAccountLogEntity;
use App\Models\UserAccountLog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Juling\Foundation\Contracts\RepositoryInterface;
use Juling\Foundation\Repositories\CurdRepository;

class UserAccountLogRepository extends CurdRepository implements RepositoryInterface
{
    private static ?UserAccountLogRepository $instance = null;

    /**
     * 单例 UserAccountLogRepository
     */
    public static function getInstance(): UserAccountLogRepository
    {
        if (is_null(self::$instance)) {
            self::$instance = new UserAccountLogRepository;
        }

        return self::$instance;
    }

    /**
     * 添加 UserAccountLogEntity
     */
    public function saveEntity(UserAccountLogEntity $entity): int
    {
        return $this->save($entity->toEntity());
    }

    /**
     * 按照ID查询返回对象
     */
    public function findOneById(int $id): ?UserAccountLogEntity
    {
        $data = $this->findById($id);
        if (empty($data)) {
            return null;
        }

        return new UserAccountLogEntity($data);
    }

    /**
     * 按照条件查询返回对象
     */
    public function findOne(array $condition = []): ?UserAccountLogEntity
    {
        $data = $this->find($condition);
        if (empty($data)) {
            return null;
        }

        return new UserAccountLogEntity($data);
    }

    /**
     * 定义数据表查询构造器
     */
    public function builder(): Builder
    {
        return DB::table('user_account_log');
    }

    /**
     * 定义数据表模型类
     */
    public function model(): Model
    {
        return new UserAccountLog;
    }
}
