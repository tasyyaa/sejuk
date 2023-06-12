<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
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
}
