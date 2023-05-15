<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendorcatalogs extends Model
{
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


