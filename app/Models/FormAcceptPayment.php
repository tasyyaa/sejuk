<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormAcceptPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'sejuk_bank_account_outcome_id'
    ];

    public function sejukBankAccountOutcome() {
        return $this->hasOne(SejukBankAccountOutcome::class, 'sejuk_bank_account_outcome_id', 'id')->latestOfMany();
    }
}
