<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'order_id',
        'catalog_id',
        'amount',
        'price'
    ];

    public function catalog()
    {
        return $this->belongsTo(Vendorcatalogs::class, 'catalog_id', 'catalog_id');
    }
}
