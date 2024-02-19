<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'business_name',
        'business_number',
        'business_account_number',
        'employee_job_id',
        'employee_name',
        'employer_name',
        'employer_phone_number',
        'dealer_name',
        'dealer_phone_number',
        'dealer_location',
        'agent_name',
        'agent_phone_number',
        'agent_location'
        ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];




    // public function assets()
    // {
    //     return $this->hasMany(Asset::class);
    // }

    public function agents()
    {
        return $this->hasMany(Agent::class);
    }

    public function businesses()
    {
        return $this->hasMany(Business::class);
    }

    public function dealers()
    {
        return $this->hasMany(Dealer::class);
    }



    public function employers()
    {
        return $this->hasMany(Employer::class);
    }
}
