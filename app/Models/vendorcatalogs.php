<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendorcatalogs extends Model
{
    public function vendor()
    {
        return $this->belongsTo('App\vendor', 'id', 'id');
    }
    public function orders()
    {
        return $this->hasMany('App\orders', 'order_id', 'id');
    }
    protected $fillable = [
        'catalog_id',
        'item_name',
        'item_price',
        'size',
        'stock',
        'store',
        'category_id',
    ];

}
