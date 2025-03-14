<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $primaryKey = 'id_user';

    protected $fillable = [
        'name',
        'last_name',
        'date_birth',
        'email',
        'phone',
        'other_phone',
        'sex',
        'promotions',
        'avatar',
        'password',
        'google_id',
        'google_token',
        'facebook_id',
        'facebook_token',
        'language_default',
        'currency_default',
        'timezone_default',
        'acount_actived',
        'service_fee',
        'constributions',
        'govermen_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates = [
        'date_birth'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'date_birth'        => 'datetime:d-m-Y',
        'other_phone'       => 'array',
    ];
}