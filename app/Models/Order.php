<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public const PAID = 'PAID';
    public const SHIPPED = 'SHIPPED';
    public const SHIPPED_BACK_APPLY_RETURN = 'SHIP_APPLY_RETURN';

    public const SHIPPED_BACK_RETURN = 'SHIP_RETURN';

    public const COMPETED_RETURN = 'COMPLETED_RETURN';
    public const COMPLETD_APPLY_RETURN = 'COMPLETED_APPLY_RETURN';

    protected $fillable = [
        'user_id',
        'vendor_id',
        'order_status',
        'total_price'
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }

    public function shipping()
    {
        return $this->hasOne(Shipping::class, 'order_id', 'id')->latestOfMany();
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'order_id', 'id')->latestOfMany();
    }

    public function applyReturn()
    {
        return $this->hasOne(ApplyForReturn::class, 'order_id', 'id')->latestOfMany();
    }

    public function formReturnPayment()
    {
        return $this->hasOne(FormReturnPayment::class, 'order_id', 'id')->latestOfMany();
    }

    public function formAcceptPayment()
    {
        return $this->hasOne(FormAcceptPayment::class, 'order_id', 'id')->latestOfMany();
    }

    public function returnPackage()
    {
        return $this->hasOne(ReturnPackage::class, 'order_id', 'id')->latestOfMany();
    }

    public function vendor()
    {
        return $this->belongsTo(Rentals::class, 'vendor_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
