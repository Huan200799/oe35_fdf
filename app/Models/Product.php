<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function product_cate(){
        return $this->belongsTo('App\Models\Categories', 'id', 'categories_id');
    }

    public function orderdetail()
    {

        return $this->hasMany(OrderDetail::class);
    }
}
