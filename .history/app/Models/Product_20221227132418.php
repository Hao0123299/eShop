<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $guarded = [];

    //product -> brand
    public function brand(){
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    //product -> ProductCategory
    public function productcategory()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }

    //product->productImage
    public 
}
