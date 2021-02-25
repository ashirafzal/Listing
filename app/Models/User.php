<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'password',
        'blocked',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public const BLOCKED = 1;
    public const NOT_BLOCKED = 0;

    public const ROLE_USER = 1;
    public const ROLE_VENDOR = 2;
    public const ROLE_ADMIN = 3;
    public const ROLE_SUPER_ADMIN = 4;

    public function isUser()
    {
        return $this->role == static::ROLE_USER;
    }

    public function isVendor()
    {
        return $this->role == static::ROLE_VENDOR;
    }

    public function isAdmin()
    {
        return $this->role == static::ROLE_ADMIN;
    }

    public function isSuperAdmin()
    {
        return $this->role == static::ROLE_SUPER_ADMIN;
    }

    public function vendors()
    {
        return $this->hasMany(Vendor::class);
    }

}