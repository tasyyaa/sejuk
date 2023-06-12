<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendorcatalogs extends Model
{
    protected $primaryKey = 'catalog_id';

    public function vendor()
    {
        return $this->belongsTo(Rentals::class, 'vendor_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

//    public function orders()
//    {
//        return $this->hasMany('App\orders', 'order_id', 'id');
//    }

//    public function getCatalogIdAttribute()
//    {
//        return 'CAT' . $this->attributes['id'];
//    }

    protected $fillable = [
        'item_name',
        'item_price',
        'size',
        'stock',
        'category_id',
        'catalog_image',
        'vendor_id'
    ];

}
