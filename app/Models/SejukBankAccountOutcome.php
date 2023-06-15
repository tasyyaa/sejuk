<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SejukBankAccountOutcome extends Model
{
    use HasFactory;

    protected $fillable = [
        'bank_name',
        'bank_account_number',
        'bank_account_name',
        'transfer_amount'
    ];
}
