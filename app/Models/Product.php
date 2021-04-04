<?php

namespace App\Models;

use App\Events\ProductView;
use Hekmatinasser\Verta\Verta;
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

    public function getCreatedAtAttribute($value)
    {
        return Verta::today($value)->format('%B %d، %Y');
    }

    public function getUpdatedAtAttribute($value)
    {
        return Verta::today($value)->format('%B %d، %Y');
    }

//    retrieved//creating//created//updating//updated//saving//saved/deleting//deleted//restoring//restored
//    protected $dispatchesEvents=[
//        'retrieved'=>ProductView::class,
//    ];
}
