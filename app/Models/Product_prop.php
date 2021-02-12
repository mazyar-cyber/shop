<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_prop extends Model
{
    use HasFactory;

    protected $table = 'product_prop';

    public function property()
    {
        return $this->hasOne(PropertyValue::class, 'property_id');
    }
}
