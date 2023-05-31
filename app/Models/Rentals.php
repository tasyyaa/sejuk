<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Rentals extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guard = 'rentals';
    protected $fillable = [
        'name',
        'email',
        'city',
        'phone_number',
        'vendor_Creditcardtype1',
        'vendor_Creditcardtype2',
        'vendor_store',
        'vendor_type',
        'vendor_oprhours',
        'vendor_storeaddress',
        'vendor_homepage',
        'vendor_address',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>

    protected $casts = [
        'email_verified_at' => 'datetime',
    ]; */
}

