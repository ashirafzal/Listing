<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestQuotes extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'comment',
        'user_id',
        'listing_id',
        'vendor_id'
    ];

    public function vendors()
    {
        return $this->belongsTo(Vendor::class,'vendor_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function listings()
    {
        return $this->belongsTo(Listing::class,'listing_id');
    }
}
