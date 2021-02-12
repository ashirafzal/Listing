<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestQuotes extends Model
{
    use HasFactory;

    protected $fillable = [
        
    ];

    public function vendors()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
