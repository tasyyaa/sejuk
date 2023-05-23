<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applyforreturn extends Model
{
    public function orders(){
        return $this->belongsTo('App\orders', 'order_id', 'id');
    }
   protected $fillable = [
        'apply_id',
        'shipping_methods',
        'name_kurir',
        'no_resi',
        'vendor_storeaddress',
        'reason',
        'order_id',
     ];
}

