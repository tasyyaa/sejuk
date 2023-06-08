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

    protected $table = 'rentals';

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
        'vendor_store',
        'vendor_type',
        'vendor_Creditcardtype1',
        'vendor_Creditcardtype2',
        'vendor_homephone',
        'vendor_address',
        'oprhours_open',
        'oprhours_close',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string> */

    protected $hidden = [
        'password',
        'remember_token',
    ];
}

