<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listing extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'category',
        'city',
        'country',
        'description',
        'hero_image',
        'featured',
        'status',
    ];

    public function vendors()
    {
        return $this->hasOne(Vendor::class,'id','vendor_id');
    }

    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }

}
