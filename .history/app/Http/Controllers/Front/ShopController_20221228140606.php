<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function show(){
        $product = Product::findof
        return view('front.shop.show');
    }
}
