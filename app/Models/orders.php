<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    public function vendorcatalogs(){
        return $this->hasOne('App\vendorcatalogs', 'catalog_id', 'id');
    }
    public function applyforreturn(){
        return $this->hasOne('App\applyforreturn', 'apply_id', 'id');
    }
    public function returnpackage(){
        return $this->hasOne('App\returnpackage', 'return_id', 'id');
    }
    use HasFactory;
}
