<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Entities\AffiliateLogEntity;
use App\Models\AffiliateLog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Juling\Foundation\Contracts\RepositoryInterface;
use Juling\Foundation\Repositories\CurdRepository;

class AffiliateLogRepository extends CurdRepository implements RepositoryInterface
{
    private static ?AffiliateLogRepository $instance = null;

    /**
     * 单例 AffiliateLogRepository
     */
    public static function getInstance(): AffiliateLogRepository
    {
        if (is_null(self::$instance)) {
            self::$instance = new AffiliateLogRepository;
        }

        return self::$instance;
    }

    /**
     * 添加 AffiliateLogEntity
     */
    public function saveEntity(AffiliateLogEntity $entity): int
    {
        return $this->save($entity->toEntity());
    }

    /**
     * 按照ID查询返回对象
     */
    public function findOneById(int $id): ?AffiliateLogEntity
    {
        $data = $this->findById($id);
        if (empty($data)) {
            return null;
        }

        return new AffiliateLogEntity($data);
    }

    /**
     * 按照条件查询返回对象
     */
    public function findOne(array $condition = []): ?AffiliateLogEntity
    {
        $data = $this->find($condition);
        if (empty($data)) {
            return null;
        }

        return new AffiliateLogEntity($data);
    }

    /**
     * 定义数据表查询构造器
     */
    public function builder(): Builder
    {
        return DB::table('affiliate_log');
    }

    /**
     * 定义数据表模型类
     */
    public function model(): Model
    {
        return new AffiliateLog;
    }
}
