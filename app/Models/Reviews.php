<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reviews extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'review_text',
        'review_email',
        'rating',
        'date_time'
    ];

    public function listings()
    {
        return $this->belongsTo(Listing::class,'id','listing_id');
    }

    public function vendors()
    {
        return $this->hasOne(Vendor::class,'id','vendor_id');
    }
}
