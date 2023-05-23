<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sejuk_bank_account_outcomes extends Model
{
    public function orders(){
        return $this->hasMany('App\Orders', 'order_id', 'id');
    }
    protected $fillable = [
        'income_id',
        'bank_id',
        'bank_account',
        'order_id',
     ];
}
