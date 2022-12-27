<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brands';
    protected $primaryKey = 'id';
    protected $guarded = [];

    //quan hệ 1 nhiều: 1 brands có nhiều product
    public function products()
}
