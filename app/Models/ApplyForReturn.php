<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyForReturn extends Model
{
    use HasFactory;

    protected $fillable = [
        'shipping_method_id',
        'nama_kurir',
        'vendor_address',
        'customer_address',
        'no_resi',
        'reason',
        'product_image',
        'order_id'
    ];

    public function shippingMethod()
    {
        return $this->belongsTo(ShippingMethod::class, 'shipping_method_id', 'id');
    }
}
