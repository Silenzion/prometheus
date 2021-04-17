<?php

namespace Silenzion\Prometheus\Models;

use Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Redirect extends Model
{
    use SoftDeletes;

    public const STATUS_CODE_MOVED_PERMANENTLY = 301;
    public const STATUS_CODE_MOVED_TEMPORARILY = 302;

    public $timestamps = false;

    protected $fillable = ['form', 'to', 'status_code'];

    protected $casts = [
        'status_code' => 'integer',
    ];

    public static function boot()
    {
        parent::boot();

        static::saved(function () {
            Cache::forget('redirect_cache_routes');
        });
    }

    public static function statusCodeList(): array
    {
        return [
            self::STATUS_CODE_MOVED_PERMANENTLY => 'Перемещено навсегда (301)',
            self::STATUS_CODE_MOVED_TEMPORARILY => 'Перемещено временно (302)',
        ];
    }
}
