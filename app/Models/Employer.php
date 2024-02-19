<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'employer_name',
        'employer_account_number',
        'employer_phone_number'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
