<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
    use HasFactory, SoftDeletes;

    public const STATUS_NOT_BLOCKED = 0;
    public const STATUS_BLOCKED = 1;

    protected $fillable = [
        'name',
        'email',
        'status'
    ];

    public function users()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function listings()
    {
        return $this->hasMany(Listing::class);
    }

    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }

}
