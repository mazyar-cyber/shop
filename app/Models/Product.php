<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(ProCat::class,'cat_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brands::class,'brand_id');
    }

    public function propertyValue()
    {
        return $this->hasMany(Product_prop::class,'product_id');
    }

}
