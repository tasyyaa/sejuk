<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'shipping_method_id',
        'customer_address',
        'vendor_address',
        'no_resi',
        'nama_kurir',
        'price'
    ];

    public function shippingMethod()
    {
        return $this->belongsTo(ShippingMethod::class, 'shipping_method_id', 'id');
    }
}
