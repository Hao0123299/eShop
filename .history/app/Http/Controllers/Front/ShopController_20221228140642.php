<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function show($id){
        $product = show::findOrFail($id);
        return view('front.shop.show');
    }
}
