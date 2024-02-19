<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'agent_name',
        'dealer_phone_number',
        'dealer_location',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
