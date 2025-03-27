<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Entities\UserAffiliateEntity;
use App\Models\UserAffiliate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Juling\Foundation\Contracts\RepositoryInterface;
use Juling\Foundation\Repositories\CurdRepository;

class UserAffiliateRepository extends CurdRepository implements RepositoryInterface
{
    private static ?UserAffiliateRepository $instance = null;

    /**
     * 单例 UserAffiliateRepository
     */
    public static function getInstance(): UserAffiliateRepository
    {
        if (is_null(self::$instance)) {
            self::$instance = new UserAffiliateRepository;
        }

        return self::$instance;
    }

    /**
     * 添加 UserAffiliateEntity
     */
    public function saveEntity(UserAffiliateEntity $entity): int
    {
        return $this->save($entity->toEntity());
    }

    /**
     * 按照ID查询返回对象
     */
    public function findOneById(int $id): ?UserAffiliateEntity
    {
        $data = $this->findById($id);
        if (empty($data)) {
            return null;
        }

        return new UserAffiliateEntity($data);
    }

    /**
     * 按照条件查询返回对象
     */
    public function findOne(array $condition = []): ?UserAffiliateEntity
    {
        $data = $this->find($condition);
        if (empty($data)) {
            return null;
        }

        return new UserAffiliateEntity($data);
    }

    /**
     * 定义数据表查询构造器
     */
    public function builder(): Builder
    {
        return DB::table('user_affiliate');
    }

    /**
     * 定义数据表模型类
     */
    public function model(): Model
    {
        return new UserAffiliate;
    }
}
