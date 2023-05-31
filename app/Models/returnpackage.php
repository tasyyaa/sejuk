<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class returnpackage extends Model
{
    public function orders(){
        return $this->belongsTo('App\orders', 'order_id', 'id');
    }
    protected $fillable = [
        'return_id',
        'shipping_methods',
        'name_kurir',
        'no_resi',
        'vendor_storeaddress',
        'order_id',
     ];
}
