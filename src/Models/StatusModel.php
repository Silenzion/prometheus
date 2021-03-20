<?php

namespace Mediabroker\Core\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $status
 *
 * @method Builder active()
 */
class StatusModel extends Model
{
    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';

    protected const ACTIVE = 'Активен';
    protected const INACTIVE = 'Неактивен';

    public static function statusList(): array
    {
        return [
            self::STATUS_ACTIVE => static::ACTIVE,
            self::STATUS_INACTIVE => static::INACTIVE,
        ];
    }

    public function isActive(): bool
    {
        return $this->status === self::STATUS_ACTIVE;
    }

    public function isInactive(): bool
    {
        return $this->status === self::STATUS_INACTIVE;
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', self::STATUS_ACTIVE);
    }
}
