<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormReturnPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'sejuk_bank_account_outcome_id',
        'bank_name',
        'bank_account_number',
        'bank_account_name'
    ];

    public function sejukBankAccountOutcome() {
        return $this->hasOne(SejukBankAccountOutcome::class, 'sejuk_bank_account_outcome_id', 'id')->latestOfMany();
    }
}
