<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductComment extends Model
{
    use HasFactory;
    protected $table = 'product_comments';
    protected $primaryKey = 'id';
    protected $guarded = [];

    //n - 1: nhiều hình ảnh có trong 1 sản phẩm
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
