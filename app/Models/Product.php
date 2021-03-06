<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    
    protected $table = "products";
    public function product_type()
    {
        return $this->belongsTo('App\ProductType','id_type','id');
    }
    public function bill_detail()
    {
        return $this->hasMany('App\BillDetail','id_product','id');
    }
}
