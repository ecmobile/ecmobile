<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Entities\AdminMessageEntity;
use App\Models\AdminMessage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Juling\Foundation\Contracts\RepositoryInterface;
use Juling\Foundation\Repositories\CurdRepository;

class AdminMessageRepository extends CurdRepository implements RepositoryInterface
{
    private static ?AdminMessageRepository $instance = null;

    /**
     * 单例 AdminMessageRepository
     */
    public static function getInstance(): AdminMessageRepository
    {
        if (is_null(self::$instance)) {
            self::$instance = new AdminMessageRepository;
        }

        return self::$instance;
    }

    /**
     * 添加 AdminMessageEntity
     */
    public function saveEntity(AdminMessageEntity $entity): int
    {
        return $this->save($entity->toEntity());
    }

    /**
     * 按照ID查询返回对象
     */
    public function findOneById(int $id): ?AdminMessageEntity
    {
        $data = $this->findById($id);
        if (empty($data)) {
            return null;
        }

        return new AdminMessageEntity($data);
    }

    /**
     * 按照条件查询返回对象
     */
    public function findOne(array $condition = []): ?AdminMessageEntity
    {
        $data = $this->find($condition);
        if (empty($data)) {
            return null;
        }

        return new AdminMessageEntity($data);
    }

    /**
     * 定义数据表查询构造器
     */
    public function builder(): Builder
    {
        return DB::table('admin_message');
    }

    /**
     * 定义数据表模型类
     */
    public function model(): Model
    {
        return new AdminMessage;
    }
}
