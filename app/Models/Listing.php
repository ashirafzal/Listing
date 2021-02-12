<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

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
        return $this->hasOne(Vendor::class);
    }

    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }

}
