<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'user_id',
        'asset_description',
        'asset_price',
        'asset_location'
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
