<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WishList extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'listing_id'
    ];

    public function users()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function listings()
    {
        return $this->hasOne(Listing::class,'id','listing_id');
    }

}
