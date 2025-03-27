<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCollect extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_collect';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'rec_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'goods_id',
        'add_time',
        'is_attention',
    ];
}
