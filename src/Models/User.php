<?php

namespace Silenzion\Prometheus\Models;

use Hash;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property int $id
 * @property string $password
 * @property string $role
 * @property string $status
 */
class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    public const ROLE_SUPER_ADMIN = 'super admin';
    public const ROLE_CONTENT_MANAGER = 'content manager';
    public const ROLE_USER = 'user';


    public const STATUS_ACTIVE = 'active';
    public const STATUS_INACTIVE = 'inactive';

    protected $guarded = 'admin';

    protected $fillable = ['full_name', 'login', 'password', 'role', 'status'];

    protected $hidden = ['password'];

    public static function newSuperAdmin(string $login, string $password): self
    {
        return static::create([
            'full_name' => 'Супер-Администратор',
            'login' => $login,
            'password' => Hash::make($password),
            'role' => self::ROLE_SUPER_ADMIN,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    public static function roleList(): array
    {
        return [
            self::ROLE_SUPER_ADMIN => 'Супер администратор',
            self::ROLE_USER => 'Зарегистрированный пользователь',
            self::ROLE_CONTENT_MANAGER => 'Контент-менеджер',
        ];
    }

    public static function statusList(): array
    {
        return [
            self::STATUS_ACTIVE => 'Активен',
            self::STATUS_INACTIVE => 'Неактивен',
        ];
    }

    public function roleName(): string
    {
        return static::roleList()[$this->role];
    }

    public function isSuperAdmin(): bool
    {
        return $this->role === self::ROLE_SUPER_ADMIN;
    }

    public function isUser(): bool
    {
        return $this->role === self::ROLE_USER;
    }

    public function isContentManager(): bool
    {
        return $this->role === self::ROLE_CONTENT_MANAGER;
    }

    public function isActive(): bool
    {
        return $this->status === self::STATUS_ACTIVE;
    }

    public function isInactive(): bool
    {
        return $this->status === self::STATUS_INACTIVE;
    }
}
