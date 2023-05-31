<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addAddress extends Model
{
    public function customer(){
        return $this->belongsTo('App\customer', 'id', 'id');
    }
    
    protected $fillable = [
        'custaddress_id',
        'custaddress_name',
        'cust_address',
        'cust_city',
        'cust_province',
        'cust_phonenumber',
     ];
}
