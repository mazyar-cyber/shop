<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductProperty extends Model
{
    use HasFactory;

    public function value()
    {
        return $this->hasMany(PropertyValue::class,'property_id');
    }
}
