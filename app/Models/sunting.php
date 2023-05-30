<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sunting extends Model
{
    public function orders(){
        return $this->belongsTo('App\orders', 'order_id', 'id');
    }
   protected $fillable = [
        'cust_name',
        'cust_email',
        'cust_Creditcardtype1',
        'cust_Creditcardtype2',
        'cust_address'
     ];
}

