<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'business_name',
        'business_account_number',
        'business_number'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
